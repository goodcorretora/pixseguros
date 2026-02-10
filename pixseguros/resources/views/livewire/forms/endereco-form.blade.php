<?php

use Livewire\Component;

use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $title = 'EnderecoForm';
    public $name;
    public $email;
    public $phone_celular;
    public $cep;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'cep' => 'required',
        'endereco' => 'required',
        'numero' => 'required',
        'complemento' => 'required',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
    ];

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone_celular = $user->phone_celular ?? '';
            $this->cep = $user->cep ?? '';
            $this->endereco = $user->endereco ?? '';
            $this->numero = $user->numero ?? '';
            $this->complemento = $user->complemento ?? '';
            $this->bairro = $user->bairro ?? '';
            $this->cidade = $user->cidade ?? '';
            $this->estado = $user->estado ?? '';
        }
    }

    public function buscarCep()
    {
        $cep = preg_replace('/\D/', '', $this->cep);
        $http = app()->environment('local')
            ? Http::withoutVerifying()
            : Http::withOptions([]);
        $response = $http->get("https://viacep.com.br/ws/{$cep}/json/");
        $data = $response->json();
        if ($response->ok() && empty($data['erro'])) {
            if (!empty($data['logradouro'])) {
                $this->endereco = $data['logradouro'];
                $this->bairro = $data['bairro'];
                $this->cidade = $data['localidade'];
                $this->estado = $data['uf'];
                session()->flash('message', 'Endereço preenchido automaticamente!');
            } else {
                session()->flash('message', 'CEP encontrado, mas logradouro não disponível. Preencha manualmente.');
            }
        } else {
            session()->flash('message', 'CEP não encontrado ou inválido. Confira e tente novamente.');
            $this->endereco = '';
            $this->bairro = '';
            $this->cidade = '';
            $this->estado = '';
        }
    }

    public function save()
    {
        $this->validate();
        Endereco::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
        ]);

        Mail::send('mails.mailendereco', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Endereço')
                    ->to('goodcorretora@gmail.com', 'Endereço')
                    ->subject($this->name);
        });
        session()->flash('message', 'Endereço salvo com sucesso!');
        $this->reset(['name', 'email', 'phone_celular', 'cep', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'estado']);
    }
    public function render()
    {
        return view('livewire.forms.endereco-form');
    }
};
?>


<div class="container mx-auto mt-8">

    <section class="mt-12 container mx-auto lg:mt-24 lg:px-16">
        <div class="px-4 lg:px-0">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <!-- Success message -->
                @if ($message = Session::get('success'))
                <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4">
                    <span>{{ $message }}</span>
                </div>
                @endif


                <!-- Success message -->
                @if (session()->has('message'))
                <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4 ">
                    <span>{{ session('message') }}</span>
                </div>
                @endif

                <form wire:submit="save" method="post">
                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <!-- Campos do formulário -->
                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                                    <input wire:model="name" type="text" id="name" name="name" autocomplete="name" class="form-input mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span>{{ $message }}</span> @enderror
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

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                    <input wire:model="email" type="text" id="email" autocomplete="email" email="email" class="form-input mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('email') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="inline col-span-6 sm:col-span-1">
                                    <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP</label>
                                    <input wire:model.debounce.150ms="cep" wire:blur="buscarCep" type="text" name="cep" id="cep" autocomplete="cep" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
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
