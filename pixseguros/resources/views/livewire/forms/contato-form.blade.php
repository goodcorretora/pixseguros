<?php

use Livewire\Component;
use App\Models\Contato;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

new class extends Component {
    public $title = 'ContatoForm';
    public $name = '';
    public $email = '';
    public $phone_celular = '';
    public $phone_fixo = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'phone_fixo' => 'nullable',
        'subject' => 'required',
        'message' => 'required',
    ];


    public function mount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone_celular = $user->phone_celular ?? '';
        }
    }

    public function save()
    {
        $this->validate();
        Contato::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'phone_fixo' => $this->phone_fixo,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        Mail::send('mails.mailcontato', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'phone_fixo' => $this->phone_fixo,
            'subject' => $this->subject,
            'user_query' => $this->message,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Contato')
                    ->to('goodcorretora@gmail.com', 'Contato')
                    ->subject($this->subject);
        });

        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');  
        $this->reset(['name' , 'email' , 'phone_celular' , 'phone_fixo' , 'subject' , 'message']);           
    }

    public function render()
    {
        return view('livewire.forms.contato-form');
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

                                <!-- Fixed Phone Number (optional) -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone_fixo" class="block text-gray-700 text-sm font-bold mb-2">Fixo</label>
                                    <input wire:model="phone_fixo" id="phone_fixo" type="text" name="phone_fixo" autocomplete="phone_fixo" x-mask="(99) 9999 99 99" placeholder="Fixo" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('phone_fixo') <span>{{ $messages }}</span> @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Assunto</label>
                                    <input wire:model="subject" type="text" name="subject" id="subject" autocomplete="subject" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2"> Mensagem </label>
                                    <div class="mt-1">
                                        <textarea wire:model="message" id="message" name="message" rows="3" class="shadow-xs focus:ring-primary-600 focus:border-primary-600 mt-1 block w-full sm:text-base border border-gray-300 rounded-md" placeholder="Deixa aqui sua mensagem"></textarea>
                                    </div>
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