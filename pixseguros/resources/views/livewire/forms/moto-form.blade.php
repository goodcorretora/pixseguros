<?php

use Livewire\Component;
use App\Models\Moto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $title = 'MotoForm';
    public $step = 1;
    public $placa;
    public $ano = false;
    public $ano_fabricacao = false;
    public $zero_km = false;
    public $modelo = '';
    public $localizacao;
    public $eCondutorPrincipal;
    public $cpf_condutor;
    public $cpf_cnpj = '';
    public $representante = '';
    public $isCnpj = false;
    public $name;
    public $email;
    public $phone_celular;
    public $interesse_comunicacoes;

    protected $rules = [
        'placa' => 'nullable',
        'ano' => 'nullable',
        'ano_fabricacao' => 'nullable',
        'zero_km' => 'nullable',
        'modelo' => 'nullable',
        'localizacao' => 'required',
        'eCondutorPrincipal' => 'required',
        'cpf_condutor' => 'nullable',
        'cpf_cnpj' => 'nullable',
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'interesse_comunicacoes' => 'nullable',
        'representante' => 'required_if:isCnpj,true',
    ];
    
    public function nextStep()
    {
        if ($this->step === 1 && !empty($this->placa)) {
            $this->step = 3; // Avança para a etapa 3 diretamente se a placa foi informada
        } else {
            $this->step++; // Avança para a próxima etapa normalmente
        }
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function skipPlacaStep()
    {
        $this->placa = ''; // Limpa o valor da placa
        $this->step = 2; // Avança para a etapa 2
    }

    public function skipCPFStep()
    {
        $this->placa = ''; // Limpa o valor da placa
        $this->step = 2; // Avança para a etapa 2
    }
    
    public function updatedCpfCnpj($value)
    {
        $this->isCnpj = preg_match('/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/', $value);
    }

    public function buscarCep()
    {
        $response = Http::get("http://viacep.com.br/ws/{$this->cep}/json/");

        if ($response->successful()) {
            $data = $response->json();
            
            // Verifica se o CEP é válido antes de acessar os dados
            if (isset($data['logradouro'])) {
            } else {
                session()->flash('message', 'CEP inválido. Por favor, insira um CEP válido.');
            }
        } else {
            session()->flash('message', 'Erro ao consultar o serviço de CEP. Tente novamente mais tarde.');
        }
    }

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone_celular = $user->phone_celular ?? '';
            $this->cpf_cnpj = $user->cpf_cnpj ?? '';
            $this->representante = $user->representante ?? '';
        }
    }

    public function save()
    {
        $this->validate();
        Moto::create([
            'user_id' => Auth::id(),
            'placa' => $this->placa,
            'ano' => $this->ano,
            'ano_fabricacao' => $this->ano_fabricacao,
            'zero_km' => $this->zero_km,
            'modelo' => $this->modelo,
            'localizacao' => $this->localizacao,
            'eCondutorPrincipal' => $this->eCondutorPrincipal,
            'cpf_condutor' => $this->cpf_condutor,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
        ]);        
        //  Send mail to admin
        Mail::send('mails.mailmoto', [
            'placa' => $this->placa,
            'ano' => $this->ano,
            'ano_fabricacao' => $this->ano_fabricacao,
            'zero_km' => $this->zero_km,
            'modelo' => $this->modelo,
            'localizacao' => $this->localizacao,
            'eCondutorPrincipal' => $this->eCondutorPrincipal,
            'cpf_condutor' => $this->cpf_condutor,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'interesse_comunicacoes' => $this->interesse_comunicacoes,
            
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Cotar Seguro Moto')
                    ->to('goodcorretora@gmail.com', 'Cotar Seguro Moto')
                    ->subject($this->name);
        });

        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset(['placa', 'ano', 'ano_fabricacao', 'zero_km', 'modelo', 'localizacao', 'eCondutorPrincipal', 'cpf_condutor', 'cpf_cnpj', 'representante', 'name',  'email', 'phone_celular', 'interesse_comunicacoes']); 
    }

    public function render()
    {
        return view('livewire.forms.moto-form');
    }
};
?>

<div>
    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">
            
            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('message'))
                <div class="p-3 rounded-sm bg-primary-500 text-secondary-100 mb-4 ">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form wire:submit="save" method="post">
                    @if($step === 1)
                    <!-- Etapa 1: Apresentação -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Digite a placa do veículo -->
                                <div class="col-span-6">
                                    <label for="placa" class="block text-secondary-700 text-base font-bold mb-2">Qual é a placa da sua moto?</label>
                                    <input wire:model="placa" id="placa" type="text" name="placa" placeholder="Placa do carro (opcional)" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                    @error('placa') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Checkbox para Não sei ou não tenho a placa do veículo -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="text-sm">
                                                <button wire:click="skipPlacaStep" class="text-primary-600 text-lg font-bold">
                                                    Não sei ou não tenho a placa do veículo
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>

                    @elseif($step === 2)
                    <!-- Etapa 2:  Descrição do Veículo -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Campo para selecionar o ano de fabricação da moto -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano da moto</label>
                                    <input type="text" wire:model="ano" id="ano" value="ano" x-mask="9999" placeholder="Digite o ano do modelo do seu veículo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- Campo para selecionar o ano de fabricação da moto -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano_fabricacao" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano de fabricação da moto</label>
                                    <input type="text" wire:model="ano_fabricacao" id="ano_fabricacao" value="ano_fabricacao" x-mask="9999" placeholder="Digite o ano de fabricação da moto" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- A moto é zero KM? -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label class="block text-secondary-700 text-sm font-bold mb-2">A moto é zero KM?</label>
                                    <div class="flex items-start ">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="zero_km" type="radio" name="zero_km" id="zero_km_sim" value="1" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm inline">
                                            <label for="zero_km" class="font-medium text-secondary-700">
                                                Sim
                                            </label>
                                        </div>
                                        <div class="ml-5 flex h-5 items-center">
                                            <input wire:model="zero_km" type="radio" name="zero_km" id="zero_km_nao" value="0" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="zero_km" class="font-medium text-secondary-700">
                                                Não
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campo para informar o modelo da moto -->
                                <div class="col-span-6">
                                    <label for="modelo" class="block text-secondary-700 text-sm font-bold mb-2">Informe o modelo da moto</label>
                                    <input wire:model="modelo" type="text" name="modelo" id="modelo"
                                        placeholder="DESCRIÇÃO DA MOTO"                                    
                                    class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>

                    </div>

                    @elseif($step === 3)
                    <!-- Etapa 3: Localização -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!--  -->
                                <div class="col-span-6">
                                    <label for="localizacao" class="block text-secondary-700 text-sm font-bold mb-2">Onde sua moto fica a noite?</label>
                                    <input wire:model.live.debounce.150ms="localizacao" type="text" name="localizacao" id="localizacao" 
                                    x-mask="99999-999" placeholder="Digite o CEP"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                    @error('localizacao') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-span-6">
                                    <div class="text-lg font-bold text-primary-600"><a href="https://buscacepinter.correios.com.br/app/endereco/index.php">Não sei o CEP</a></div>
                                </div>




                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>

                    @elseif($step === 4)
                    <!-- Etapa 4: Condutor -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">



                                <!-- CPF -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cpf_cnpj" class="block text-gray-700 text-sm font-bold mb-2">CPF ou CNPJ</label>
                                    <input wire:model="cpf_cnpj" type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="Digite o CPF ou CNPJ" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('cpf_cnpj') <span>{{ $message }}</span> @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                     @if($isCnpj)
                                    <label for="representante" class="block text-gray-700 text-sm font-bold mb-2">Representante da Empresa</label>
                                    <input wire:model="representante" type="text" id="representante" name="representante" placeholder="Digite o CPF ou CNPJ" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('representante') <span>{{ $message }}</span> @enderror
                                    @endif
                                </div>



                                <div class="col-span-6">
                                    <!-- Digite o CPF CONDUTOR -->

                                    <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                        <label for="eCondutorPrincipal">Você é o condutor principal?</label><br>
                                        <input type="radio" wire:model="eCondutorPrincipal" id="eCondutorPrincipal" value="sim" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Sim<br >
                                        <input type="radio" wire:model="eCondutorPrincipal" id="eCondutorPrincipal" value="nao" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Não<br>
                                    </div>


                                    <div x-data="{ showCPF: @entangle('eCondutorPrincipal') }" class="px-5 mb-4">
                                        <div x-show="showCPF">
                                            <label for="cpf_condutor">CPF do condutor principal (obrigatório)</label><br>
                                            <input type="text" id="cpf_condutor" wire:model="cpf_condutor" x-mask="999 999 999-99" placeholder="Digite o CPF do condutor"
                                            class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                            <br>
                                        </div>
                                    </div>

                                </div>












                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>

                    @elseif($step === 5)
                    <!-- Etapa 5: Dados Pessoais -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">



                                <!-- Informe seus dados -->
                                <div class="col-span-6">


                                    <!-- Digite o Nome -->
                                    <div class="col-span-6">
                                        <label for="name" class="block text-secondary-700 text-sm font-bold mb-2">Nome</label>
                                        <input wire:model="name" id="name" type="text" required name="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        @error('name') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Digite o Email -->
                                    <div class="col-span-6">
                                        <label for="email" class="block text-secondary-700 text-sm font-bold mb-2">Email</label>
                                        <input wire:model="email" id="email" type="text" required name="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                        @error('email') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Digite o Telefone com DDD -->
                                    <!-- Mobile Phone Number -->
                                    <div class="col-span-6 sm:col-span-2" x-data>
                                        <label for="phone_celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
                                        <input
                                            wire:model="phone_celular"
                                            id="phone_celular"
                                            type="text"
                                            required
                                            name="phone_celular"
                                            autocomplete="phone_celular"
                                            x-mask="(99) 99999-9999"
                                            x-mask:dynamic="(99) 9999-9999"
                                            placeholder="Celular"
                                            class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md"
                                        >
                                        @error('phone_celular') <span>{{ $message }}</span> @enderror
                                    </div>

                                </div>

                                 <!-- Checkbox para confirmar ou não interesse em receber comunicações -->
                                 <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="interesse_comunicacoes" id="interesse_comunicacoes" type="checkbox" name="interesse_comunicacoes" value="comunicacoes" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="interesse_comunicacoes" class="font-medium text-secondary-700">
                                                    Não tenho interesse em receber comunicações com condições especiais e ofertas de Produtos e Serviços Porto.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                       
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button type="submit" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">ENVIAR</button>
                        </div>
                    </div>

                    @endif

                </form>
            </div>


        </div>

    </section>
</div>
