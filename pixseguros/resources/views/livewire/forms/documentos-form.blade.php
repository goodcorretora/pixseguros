<?php

use Livewire\Component;

use App\Models\Documento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $title = 'DocumentoForm';
    public $name;
    public $email;
    public $phone_celular;
    public $cpf_cnpj;
    public $representante;
    public $isCnpj;
    public $datadenascimento;
    public $identidade;
    public $orgaoexpedidor;
    public $datadeexpedicao;
    public $genero;
    public $estadocivil;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'cpf_cnpj' => 'required',
        'representante' => 'required_if:isCnpj,true',
        'datadenascimento' => 'required',
        'identidade' => 'required',
        'orgaoexpedidor' => 'required',
        'datadeexpedicao' => 'required',
        'genero' => 'required',
        'estadocivil' => 'required',
    ];
    
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

    public function updatedCpfCnpj($value)
    {
        $digits = preg_replace('/\D/', '', $value);
        $this->isCnpj = strlen($digits) === 14;
    }

    public function save()
    {
        $this->validate();
        Documento::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'datadenascimento' => $this->datadenascimento,
            'identidade'=> $this->identidade,
            'orgaoexpedidor' => $this->orgaoexpedidor,
            'datadeexpedicao' => $this->datadeexpedicao,
            'genero' => $this->genero,
            'estadocivil' => $this->estadocivil,
        ]);
        
        Mail::send('mails.maildocumento', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'datadenascimento' => $this->datadenascimento,
            'identidade'=> $this->identidade,
            'orgaoexpedidor' => $this->orgaoexpedidor,
            'datadeexpedicao' => $this->datadeexpedicao,
            'genero' => $this->genero,
            'estadocivil' => $this->estadocivil,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Documentos Pessoais')
                    ->to('goodcorretora@gmail.com', 'Documentos Pessoais')
                    ->subject($this->name);
        });
        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset(['name', 'email', 'phone_celular', 'cpf_cnpj', 'representante', 'datadenascimento', 'identidade', 'orgaoexpedidor', 'datadeexpedicao', 'genero', 'estadocivil']);
    }

    public function render()
    {
        return view('livewire.forms.documentos-form');
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

                <div>

                    <form wire:submit="save" method="post">
                        @CSRF
                        <div class="shadow-sm overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <!-- Name -->
                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                        <input wire:model="name" id="name" type="text" required name="name" autocomplete="name" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                        @error('name') <span>{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                        <input wire:model="email" id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                        @error('email') <span>{{ $message }}</span> @enderror
                                    </div>

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

                                    <!-- CPF -->
                                    <div class="col-span-6 sm:col-span-2">
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


                                    
                                    <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                        <label for="datadenascimento" class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento</label>
                                        <input wire:model="datadenascimento" type="date" name="datadenascimento" id="datadenascimento" autocomplete="datadenascimento-veiculo" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>



                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="identidade" class="block text-gray-700 text-sm font-bold mb-2">Identidade</label>
                                        <input wire:model="identidade" type="text" name="identidade" id="identidade" autocomplete="identidade" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-1">
                                        <label for="orgaoexpedidor" class="block text-gray-700 text-sm font-bold mb-2">Órgão Expedidor</label>
                                        <input wire:model="orgaoexpedidor" type="text" name="orgaoexpedidor" id="orgaoexpedidor" autocomplete="orgaoexpedidor" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-1">
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
                            <!-- ... -->
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-400 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</div>
