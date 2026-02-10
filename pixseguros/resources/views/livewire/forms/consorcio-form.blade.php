<?php

use Livewire\Component;
use App\Models\Consorcio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $title = 'ConsorcioForm';
    public $name = '';
    public $email = '';
    public $phone_celular = '';
    public $cpf_cnpj = '';
    public $representante = '';
    public $consorcio = '';
    public $isCnpj = false;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'cpf_cnpj' => 'required',
        'consorcio' => 'required',
        'representante' => 'required_if:isCnpj,true',
    ];

    public function mount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone_celular = $user->phone_celular;
            $this->cpf_cnpj = $user->cpf_cnpj;
            $this->representante = $user->representante;
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
        Consorcio::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'representante' => $this->representante,
            'consorcio' => $this->consorcio,
        ]);

        Mail::send('mails.mailconsorcio', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cpf_cnpj' => $this->cpf_cnpj,
            'consorcio' => $this->consorcio,
        ], function ($message) {
            $message->to('contato@pixseguros.com.br', 'Solicitar Consórcio')
                    ->to('goodcorretora@gmail.com', 'Solicitar Consórcio')
                    ->subject($this->name);
        });

        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset('name', 'email', 'phone_celular', 'cpf_cnpj', 'representante', 'consorcio');
    }

    public function render()
    {
        return view('livewire.forms.consorcio-form');
    }
};
?>

<div>

    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('message'))
                <div class="p-3 rounded-sm bg-primary-500 text-gray-100 mb-4">
                    <span>{{ $message }}</span>
                </div>
                @endif

                <form wire:submit="save" method="post">
                    @CSRF


                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                                    <input wire:model="name" id="name" type="text" required name="name" autocomplete="name" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('name') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input wire:model="email" id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
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

                                <div class="col-span-6">
                                    <label for="consorcio" class="block text-gray-700 text-sm font-bold mb-2">Veja nossos Produtos</label>
                                    <select wire:model="consorcio" id="consorcio" name="consorcio" autocomplete="consorcio-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-xs focus:outline-hidden focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                        <option>Escolha Aqui o Teu Sonho!</option>
                                        <option>Consórcio Imóvel</option>
                                        <option>Consórcio de Moto</option>
                                        <option>Consórcio de Veículo</option>
                                        <option>Consórcio de Veículo Pesado</option>
                                        <option>Consórcio de Veículo Usado</option>
                                        <option>Consórcio Máquinas</option>
                                        <option>Formatura e Intercâmbio </option>
                                        <option>Consórcio para Festas </option>
                                        <option>Consórcio para Viagem </option>
                                        <option>Consórcio para Procedimento Estético </option>
                                        <option>Consórcio para Cirúrgia </option>
                                        <option>Consórcio Reformas</option>
                                        <option>Consórcio de Veículo Usado</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="w-56 inline-flex justify-center py-2 px-4 border border-transparent shadow-xs text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-lio-500">ENVIAR</button>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </section>

</div>