<?php

use Livewire\Component;
use App\Models\Auto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

new class extends Component {
    public $title = 'AutoForm';
    public $step = 1;
    public $placa;
    public $modificado = false;
    public $leilao = false;
    public $ano = false;
    public $ano_fabricacao = false;
    public $zero_km = false;
    public $modelo = '';
    public $uso;
    public $bonus = false;
    public $localizacao;
    public $experiencia;
    public $seguradora;
    public $classe_bonus;
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
        'modificado' => 'nullable',
        'leilao' => 'nullable',
        'ano' => 'nullable',
        'ano_fabricacao' => 'nullable',
        'zero_km' => 'nullable',
        'modelo' => 'nullable',
        'uso' => 'required',
        'bonus' => 'nullable',
        'localizacao' => 'required',
        'experiencia' => 'required',
        'seguradora' => 'required',
        'classe_bonus' => 'required',
        'eCondutorPrincipal' => 'required',
        'cpf_condutor' => 'nullable',
        'cpf_cnpj' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'interesse_comunicacoes' => 'nullable',
        'representante' => 'required_if:isCnpj,true',
    ];

    public function updatedCpfCnpj($value)
    {
        $digits = preg_replace('/\D/', '', $value);
        $this->isCnpj = strlen($digits) === 14;
    }

    public function nextStep()
    {
        if ($this->step === 1 && !empty($this->placa)) {
            $this->step = 3;
        } else {
            $this->step++;
        }
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function skipPlacaStep()
    {
        $this->placa = '';
        $this->step = 2;
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
        Auto::create([
            'user_id' => Auth::id(),
            'placa' => $this->placa,
            'modificado' => $this->modificado,
            'leilao' => $this->leilao,
            'ano' => $this->ano,
            'ano_fabricacao' => $this->ano_fabricacao,
            'zero_km' => $this->zero_km,
            'modelo' => $this->modelo,
            'uso' => $this->uso,
            'bonus' => $this->bonus,
            'experiencia' => $this->experiencia,
            'localizacao' => $this->localizacao,
            'seguradora' => $this->seguradora,
            'classe_bonus' => $this->classe_bonus,
            'eCondutorPrincipal' => $this->eCondutorPrincipal,
            'cpf_condutor' => $this->cpf_condutor,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
        ]);
        Mail::send('mails.mailauto', [
            'placa' => $this->placa,
            'modificado' => $this->modificado,
            'leilao' => $this->leilao,
            'ano' => $this->ano,
            'ano_fabricacao' => $this->ano_fabricacao,
            'zero_km' => $this->zero_km,
            'modelo' => $this->modelo,
            'uso' => $this->uso,
            'bonus' => $this->bonus,
            'experiencia' => $this->experiencia,
            'localizacao' => $this->localizacao,
            'seguradora' => $this->seguradora,
            'classe_bonus' => $this->classe_bonus,
            'eCondutorPrincipal' => $this->eCondutorPrincipal,
            'cpf_condutor' => $this->cpf_condutor,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'interesse_comunicacoes' => $this->interesse_comunicacoes,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Cotar Seguro Auto')
                    ->to('goodcorretora@gmail.com', 'Cotar Seguro Auto')
                    ->subject($this->name);
        });
        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset(['placa', 'modificado', 'leilao', 'ano', 'ano_fabricacao', 'zero_km', 'modelo', 'uso', 'bonus', 'localizacao', 'experiencia', 'seguradora', 'classe_bonus', 'eCondutorPrincipal', 'cpf_condutor', 'cpf_cnpj', 'representante', 'name',  'email', 'phone_celular', 'interesse_comunicacoes']);
    }

    public function render()
    {
        return view('livewire.forms.auto-form');
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
                                    <label for="placa" class="block text-secondary-700 text-sm font-bold mb-2">Qual é a placa do seu automóvel?</label>
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


                                <!-- Checkbox para kit-Gas, Blindagem, Chassi remarcado ou veículo modificado -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="modificado" id="modificado" type="checkbox" value="modificado" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="modificado" class="font-medium text-secondary-700">
                                                    Meu carro contém kit-Gas, Blindagem, Chassi remarcado ou veículo modificado.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox para veículo  de leilão -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="leilao" id="leilao" type="checkbox" value="leilao" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="leilao" class="font-medium text-secondary-700">
                                                    Meu carro é um veículo de leilão.
                                                </label>
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
                    <!-- Etapa 2: Documentação -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Campo para selecionar o ano de fabricação do veículo -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano do veículo</label>
                                    <input type="text" wire:model="ano" id="ano" value="ano" x-mask="9999" placeholder="Digite o ano do modelo do seu veículo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- Campo para selecionar o ano de fabricação do veículo -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ano_fabricacao" class="block text-secondary-700 text-sm font-bold mb-2">Selecione o ano de fabricação do veículo</label>
                                    <input type="text" wire:model="ano_fabricacao" id="ano_fabricacao" value="ano_fabricacao" x-mask="9999" placeholder="Digite o ano de fabricação do veículo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- O veículo é zero KM? -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label class="block text-secondary-700 text-sm font-bold mb-2">O veículo é zero KM?</label>
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

                                <!-- Campo para informar o modelo do veículo -->
                                <div class="col-span-6">
                                    <label for="modelo" class="block text-secondary-700 text-sm font-bold mb-2">Informe o modelo do veículo</label>
                                    <input wire:model="modelo" type="text" name="modelo" id="modelo" value="modelo" 
                                    placeholder="FIAT NOVO UNO ATTRACTIVE 1.0 6V FLEX - 5PORTAS - GASOLINA/ALCOOL - MANUAL - CAT.10 - COD.4310"                                    
                                    class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-secondary-300 rounded-md">
                                </div>

                                <!-- Checkbox para kit-Gas, Blindagem, Chassi remarcado ou veículo modificado -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="modificado" id="modificado"  type="checkbox" value="modificado" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="modificado" class="font-medium text-secondary-700">
                                                    Meu carro contém kit-Gas, Blindagem, Chassi remarcado ou veículo modificado.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox para veículo  de leilão -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="leilao" id="leilao"  type="checkbox" value="leilao" value="yes" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="leilao" class="font-medium text-secondary-700">
                                                    Meu carro é um veículo de leilão.
                                                </label>
                                            </div>
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

                    @elseif($step === 3)
                    <!-- Etapa 3: Como você usa o veículo -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Como você usa o veículo? -->
                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <label class="block text-secondary-700 text-sm font-bold mb-2">Como você usa o veículo?</label>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="uso_Uso pessoal" wire:model="uso" value="Uso pessoal" name="uso" name="uso" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="uso" class="font-medium text-secondary-700">
                                                    Uso pessoal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="uso_Uso comercial" wire:model="uso" value="Uso comercial" name="uso" required name="uso" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="uso" class="font-medium text-secondary-700">
                                                    Uso comercial
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="uso_Motorista de aplicativo" wire:model="uso" value="Motorista de aplicativo" name="uso" required name="uso" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="uso" class="font-medium text-secondary-700">
                                                    Motorista de aplicativo, particular ou táxi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="uso_Outros" wire:model="uso" value="Outros" name="uso" required name="uso" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="uso" class="font-medium text-secondary-700">
                                                    Outros
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input wire:model="bonus" id="bonus" type="checkbox" name="bonus" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="bonus" class="font-medium text-secondary-700">
                                                    Quero usar minha classe de bônus
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="ml-3 text-sm">
                                                <label class="font-medium text-secondary-700">
                                                    A classe de bônus é um sistema de pontuação realizado pelas seguradoras, para oferecer um valor do seguro de acordo com seu perfil.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="ml-3 text-sm">
                                                <label class="font-medium text-secondary-700">
                                                    Saiba mais sobre a classe de bônus
                                                </label>
                                            </div>
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


                    @elseif($step === 4)
                    <!-- Etapa 3: Como você usa o veículo -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Sobre suas experiências com seguro? -->

                                <div class="col-span-6">
                                    <div class="mt-4 space-y-4">
                                        <label class="block text-secondary-700 text-sm font-bold mb-2">Sobre suas experiências com seguro?</label>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="experiencia_Tenho apolice" wire:model="experiencia" value="Tenho apolice" name="experiencia" required name="experiencia" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="experiencia" class="font-medium text-secondary-700">
                                                    Tenho uma apólice em outra empresa
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="experiencia_Apolice cancelada" wire:model="experiencia" value="Apolice cancelada" name="experiencia" required name="experiencia" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="experiencia" class="font-medium text-secondary-700">
                                                    Já tive seguro mas a apólice foi cancelada
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="experiencia_Indenizada" wire:model="experiencia" value="Indenizada" name="experiencia" required name="experiencia" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="experiencia" class="font-medium text-secondary-700">
                                                    Tenho apólice e recebi uma indenização integral
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="radio" id="experiencia_Vencida" wire:model="experiencia" value="Vencida" name="experiencia" required name="experiencia" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="experiencia" class="font-medium text-secondary-700">
                                                    Minha apólice venceu há 30 dias
                                                </label>
                                            </div>
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
                    <!-- Etapa 5: Seguradora -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6">
                                    <label for="seguradora" class="block text-secondary-700 text-sm font-bold mb-2">Qual o nome da seguradora?</label>
                                    <select wire:model="seguradora" id="seguradora" name="seguradora" class="mt-1 block w-full py-2 px-3 border border-secondary-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-600 focus:border-primary-600 sm:text-sm">
                                        <option>Selecione o nome da empresa</option>
                                        <option value="ALFA SEGURADORA">ALFA SEGURADORA S/A</option>
                                        <option value="ALLIANZ SEGUROS">ALLIANZ SEGUROS</option>
                                        <option value="ARUANA SEGURADORA">ARUANA SEGURADORA S.A.</option>
                                        <option value="AZUL COMPANHIA DE SEGUROS GERAIS">AZUL COMPANHIA DE SEGUROS GERAIS</option>
                                        <option value="BANESTES SEGUROS S/A">BANESTES SEGUROS S/A</option>
                                        <option value="BRADESCO AUTO/RE CIA DE SEGUROS">BRADESCO AUTO/RE CIA DE SEGUROS</option>
                                        <option value="BRASIL VEÍCULOS COMPANHIA DE SEGUROS">BRASIL VEÍCULOS COMPANHIA DE SEGUROS</option>
                                        <option value="BÔNUS DE COMPANHIA DO EXTERIOR">BÔNUS DE COMPANHIA DO EXTERIOR</option>
                                        <option value="CAIXA SEGUROS">CAIXA SEGUROS</option>
                                        <option value="CIA EXCELSIOR DE SEGUROS">CIA EXCELSIOR DE SEGUROS</option>
                                        <option value="ESSOR SEGUROS S.A.">ESSOR SEGUROS S.A.</option>
                                        <option value="GENERALI DO BRASIL CIA NACIONAL DE SEGS">GENERALI DO BRASIL CIA NACIONAL DE SEGS</option>
                                        <option value="HDI SEGUROS S/A">HDI SEGUROS S/A</option>
                                        <option value="INDIANA SEGUROS SA">INDIANA SEGUROS SA</option>
                                        <option value="LIBERTY PAULISTA SEGUROS SA">LIBERTY PAULISTA SEGUROS SA</option>
                                        <option value="MAPFRE / BB E MAPFRE">MAPFRE / BB E MAPFRE</option>
                                        <option value="MITSUI SUMITOMO SEGUROS S/A">MITSUI SUMITOMO SEGUROS S/A</option>
                                        <option value="SANCOR SEGUROS DO BRASIL S.A">SANCOR SEGUROS DO BRASIL S.A</option>
                                        <option value="SANTANDER AUTO S.A.">SANTANDER AUTO S.A.</option>
                                        <option value="SEGUROS SURA S/A">SEGUROS SURA S/A</option>
                                        <option value="SOMPO CONSUMER SEGURADORA S.A.">SOMPO CONSUMER SEGURADORA S.A.</option>
                                        <option value="SOMPO SEGUROS S/A">SOMPO SEGUROS S/A</option>
                                        <option value="SUHAI SEGUROS S/A">SUHAI SEGUROS S/A</option>
                                        <option value="SUICA SEGURADORA S.A">SUICA SEGURADORA S.A</option>
                                        <option value="SUL AMÉRICA CIA NACIONAL SEGUROS">SUL AMÉRICA CIA NACIONAL SEGUROS</option>
                                        <option value="SULAMÉRICA SEGUROS DE AUTOMÓVEIS E MASSIFICADOS S.A.">SULAMÉRICA SEGUROS DE AUTOMÓVEIS E MASSIFICADOS S.A.</option>
                                        <option value="TOKIO MARINE SEGURADORA S.A.">TOKIO MARINE SEGURADORA S.A.</option>
                                        <option value="USEBENS SEGUROS S/A">USEBENS SEGUROS S/A</option>
                                        <option value="YOUSE SEGURADORA S.A.">YOUSE SEGURADORA S.A.</option>
                                        <option value="ZURICH MINAS-BRASIL SEGUROS S/A">ZURICH MINAS-BRASIL SEGUROS S/A</option>
                                    </select>
                                </div>
                                <div class="col-span-6">
                                    <label for="classe_bonus" class="block text-secondary-700 text-sm font-bold mb-2">Qual o número da sua classe de bônus?</label>
                                    <select wire:model="classe_bonus" id="classe_bonus" name="classe_bonus" class="mt-1 block w-full py-2 px-3 border border-secondary-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-600 focus:border-primary-600 sm:text-sm">
                                        <option>Declare sua classe de bônus</option>
                                        <option value="00">00</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                            <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                            <button wire:click="nextStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Continuar</button>
                        </div>
                    </div>


                    @elseif($step === 6)
                    <!-- Etapa 6: Localização -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!--  -->
                                <div class="col-span-6">
                                    <label for="localizacao" class="block text-secondary-700 text-sm font-bold mb-2">Onde seu automóvel fica a noite?</label>
                                    <input wire:model.debounce.150ms="localizacao" type="text" name="localizacao" id="localizacao" 
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

                    @elseif($step === 7)
                    <!-- Etapa 4:  Condutor -->

                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">


                                <!-- Digite o CPF/CNPJ -->


                                <div class="inline col-span-6">
                                    <label for="cpf_cnpj" class="block text-secondary-700 text-sm font-bold mb-2">Número do Documento</label>
                                    <input wire:model="cpf_cnpj" type="text" id="cpf_cnpj" name="cpf_cnpj" 
                                    x-mask="999 999 999-99" placeholder="Digite o CPF ou CNPJ"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
                                    @error('cpf_cnpj') <span>{{ $message }}</span> @enderror
                                </div>



                                <div class="col-span-6">
                                    <!-- Digite o CPF CONDUTOR -->

                                    <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                        <label for="eCondutorPrincipal">Você é o condutor principal?</label><br>
                                        <input type="radio" wire:model="eCondutorPrincipal" id="eCondutorPrincipal" value="sim" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Sim<br >
                                        <input type="radio" wire:model="eCondutorPrincipal" id="eCondutorPrincipal" value="nao" class="h-4 w-4 rounded-sm border-secondary-300 text-primary-600 focus:ring-primary-500"> Não<br>
                                    </div>


                                    <div x-data="{ showCPF: @entangle('eCondutorPrincipal').live }" class="px-5 mb-4">
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

                    @elseif($step === 8)
                    <!-- Etapa 5:  Dados Pessoais -->

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
                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="phone_celular" class="block text-secondary-700 text-sm font-bold mb-2">Celular</label>
                                        <input wire:model="phone_celular" id="phone_celular" type="text" required name="phone_celular" 
                                        x-mask="(99) 99999 99 99" placeholder="Celular"
                                        class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-secondary-300 rounded-md">
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
                            <button type="submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-lio-500">ENVIAR</button>
                        </div>
                    </div>

                    @endif

                </form>
            </div>

        </div>

    </section>
</div>

