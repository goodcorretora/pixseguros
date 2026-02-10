<?php

use Livewire\Component;
use App\Models\Emprestimo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


new class extends Component {
    public $title = 'EmprestimoForm';
    public $step = 1;
    public $name = '';
    public $email = '';
    public $cpf_cnpj = '';
    public $representante = '';
    public $isCnpj = false;
    public $phone_celular = '';
    public $datadenascimento = '';
    public $identidade = '';
    public $orgaoexpedidor = '';
    public $datadeexpedicao = '';
    public $genero = '';
    public $estadocivil = '';
    public $cep = '';
    public $endereco = '';
    public $numero = '';
    public $complemento = '';
    public $bairro = '';
    public $cidade = '';
    public $estado = '';
    public $escolha = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'cpf_cnpj' => 'required',
        'datadenascimento' => 'required',
        'identidade' => 'required',
        'orgaoexpedidor' => 'required',
        'datadeexpedicao' => 'required',
        'genero' => 'required',
        'estadocivil' => 'required',
        'cep' => 'required',
        'endereco' => 'required',
        'numero' => 'required',
        'complemento' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'escolha' => 'required',
        'representante' => 'required_if:isCnpj,true',
    ];

    public function updatedCpfCnpj($value)
    {
        $this->isCnpj = preg_match('/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/', $value);
    }

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
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

    public function buscarCep()
    {
        // Ignora verificação SSL apenas em ambiente local
        $http = Http::withOptions([
            'verify' => app()->environment('local') ? false : true
        ]);
        $response = $http->get("https://viacep.com.br/ws/{$this->cep}/json/");
        if ($response->successful()) {
            $data = $response->json();
            if (isset($data['logradouro'])) {
                $this->endereco = $data['logradouro'];
                $this->bairro = $data['bairro'];
                $this->cidade = $data['localidade'];
                $this->estado = $data['uf'];
            } else {
                session()->flash('message', 'CEP inválido. Por favor, insira um CEP válido.');
            }
        } else {
            session()->flash('message', 'Erro ao consultar o serviço de CEP. Tente novamente mais tarde.');
        }
    }

    public function save()
    {
        $this->validate();
        Emprestimo::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'datadenascimento' => $this->datadenascimento,
            'identidade'=> $this->identidade,
            'orgaoexpedidor' => $this->orgaoexpedidor,
            'datadeexpedicao' => $this->datadeexpedicao,
            'genero' => $this->genero,
            'estadocivil' => $this->estadocivil,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'escolha' => $this->escolha,
        ]);
        Mail::send('mails.mailcartao', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'datadenascimento' => $this->datadenascimento,
            'identidade'=> $this->identidade,
            'orgaoexpedidor' => $this->orgaoexpedidor,
            'datadeexpedicao' => $this->datadeexpedicao,
            'genero' => $this->genero,
            'estadocivil' => $this->estadocivil,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'escolha' => $this->escolha,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Solicitar Produtos Financeiros')
                    ->to('goodcorretora@gmail.com', 'Solicitar Produtos Financeiros')
                    ->subject($this->name);
        });
        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.forms.emprestimo-form');
    }
};
?>

<div>
    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('message'))
                <div class="p-3 rounded-sm bg-primary-500 text-gray-100 mb-4 ">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form wire:submit="save" method="post">
                    @CSRF

                    @if($step === 1)
                    <!-- Etapa 1: Apresentação -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                    <input wire:model="name" id="name" type="text" required name="name" autocomplete="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('name') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input wire:model="email" id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('email') <span>{{ $message }}</span> @enderror
                                </div>


                                <!-- Mobile Phone Number -->
                                <div class="col-span-6 sm:col-span-3" x-data>
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

                                <!-- CPF -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cpf_cnpj" class="block text-gray-700 text-sm font-bold mb-2">CPF ou CNPJ</label>
                                    <input wire:model="cpf_cnpj" type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="Digite o CPF ou CNPJ" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('cpf_cnpj') <span>{{ $message }}</span> @enderror
                                </div>
                                @if($isCnpj)
                                    <div>
                                        <label>Representante</label>
                                        <input type="text" wire:model="representante" />
                                    </div>
                                @endif




                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>

                    @elseif($step === 2)
                    <!-- Etapa 2: Documentação -->


                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="datadenascimento" class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento</label>
                                    <input wire:model="datadenascimento" type="date" name="datadenascimento" id="datadenascimento" autocomplete="datadenascimento-veiculo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="identidade" class="block text-gray-700 text-sm font-bold mb-2">Identidade</label>
                                    <input wire:model="identidade" type="text" name="identidade" id="identidade" autocomplete="identidade" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="orgaoexpedidor" class="block text-gray-700 text-sm font-bold mb-2">Órgão Expedidor</label>
                                    <input wire:model="orgaoexpedidor" type="text" name="orgaoexpedidor" id="orgaoexpedidor" autocomplete="orgaoexpedidor" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="datadeexpedicao" class="block text-gray-700 text-sm font-bold mb-2">Data de Expedição</label>
                                    <input wire:model="datadeexpedicao" type="date" name="datadeexpedicao" id="datadeexpedicao" autocomplete="datadeexpedicao-veiculo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Gênero</label>
                                    <select wire:model="genero" id="genero" name="genero" autocomplete="genero-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                        <option>Gênero</option>
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                        <option>Outro</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="estadocivil" class="block text-gray-700 text-sm font-bold mb-2">Estado Civil</label>
                                    <select wire:model="estadocivil" id="estadocivil" name="estadocivil" autocomplete="estadocivil-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                        <option>Estado Civil</option>
                                        <option>Solteiro</option>
                                        <option>Casado</option>
                                        <option>Separado/Divorciado</option>
                                        <option>União Estável</option>
                                        <option>Outro</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>

                    </div>

                    @elseif($step === 3)
                    <!-- Etapa 4: Endereço -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="inline col-span-6 sm:col-span-1">
                                    <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP</label>
                                    <input wire:model.debounce.150ms="cep" type="text" name="cep" id="cep" autocomplete="cep" 
                                    x-mask="99999-999" placeholder="Digite o CEP"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('cep') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                    <div class="mt-2 flex items-center gap-x-3">
                                        <button type="button" wire:click="buscarCep" wire:loading.attr="disabled" class="bg-primary-600 text-white px-4 py-2 rounded-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-3">
                                    <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço</label>
                                    <input wire:model="endereco" type="text" name="endereco" id="endereco" autocomplete="endereco" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número</label>
                                    <input wire:model="numero" type="text" name="numero" id="numero" autocomplete="numero" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="complemento" class="block text-gray-700 text-sm font-bold mb-2">Complemento</label>
                                    <input wire:model="complemento" type="text" name="complemento" id="complemento" autocomplete="complemento" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro</label>
                                    <input wire:model="bairro" type="text" name="bairro" id="bairro" autocomplete="bairro" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade</label>
                                    <input wire:model="cidade" type="text" name="cidade" id="cidade" autocomplete="cidade" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                    <input wire:model="estado" type="text" name="estado" id="estado" autocomplete="estado" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>



                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>

                    @elseif($step === 4)
                        <!-- Etapa 4: Escolha -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6">
                                    <label for="escolha" class="block text-gray-700 text-sm font-bold mb-2">Veja nossos Produtos</label>
                                    <select wire:model="escolha" id="escolha" name="escolha" autocomplete="escolha-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-lio-500 focus:border-lio-500 sm:text-sm">
                                        <option>Escolha de Produto</option>
                                        <option>Auto Crédito</option>
                                        <option>Carro Fácil</option>
                                        <option>Carro Fácil Seminovo</option>
                                        <option>Carro por Assinatura</option>
                                        <option>Consignado</option>
                                        <option>Crédito Pessoal</option>
                                        <option>Crédito com Garantia Imobiliária</option>
                                        <option>Financiamento de Imóveis</option>
                                        <option>Financiamento de Veículo</option>
                                        <option>Portabilidade</option>
                                        <option>Refinanciamento</option>
                                        <option>Título de Capitalização para Aluguel</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="save" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">ENVIAR</button>
                        </div>

                    </div>

                    @endif

                </form>
            </div>

        </div>

    </section>
</div>