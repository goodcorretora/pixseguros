<?php

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use App\Models\Consent;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

new class extends Component
{
    
   //public $accepted = '';
    //public $declined = '';

    public $accepted = false;
    public $declined = false;


    //public function mount()
    //{
    //    $this->accepted = Cookie::has('cookie-consent');
    //}

    protected $rules = [
        // ... Outras regras ...
        'user.terms' => 'boolean', // Certifique-se de incluir esta regra
    ];
    
    
    public function mount()
    {
        // Verifica se já foi aceito ou recusado na sessão
        $this->accepted = Session::get('pixseguros_consent') === 'accepted';
        $this->declined = Session::get('pixseguros_consent') === 'declined';
    }

    public function accept()
    {
        //Cookie::queue(Cookie::forever('cookie_consent', true));
        //$this->accepted = true;

        // Configura o cookie
        Cookie::queue(Cookie::forever('pixseguros_consent', 'accepted'));

        // Configura a sessão
        Session::put('pixseguros_consent', 'accepted');

        $this->accepted = true;
        $this->declined = false;

        // Lógica de aceitar
        Consent::create([
            'accepted' => true,
            'declined' => false,
            'ip_address' => Request::ip(),
        ]);

    }

    public function decline()
    {
        //Cookie::queue(Cookie::forget('cookie_consent'));
        //$this->declined = true;
        // Configura o cookie
        Cookie::queue(Cookie::forget('pixseguros_consent', 'declined'));

        // Configura a sessão
        Session::put('pixseguros_consent', 'declined');

        $this->accepted = false;
        $this->declined = true;

        // Lógica de recusar
        Consent::create([
            'accepted' => false,
            'declined' => true,
            'ip_address' => Request::ip(),
        ]);
    } 
    
    public function render()
    {
        // Verifica se o consentimento foi aceito ou recusado
        if ($this->accepted || $this->declined) {
            // Se aceito ou recusado, não renderize a mensagem
            return view('livewire.cookies.cookie-consent')->with(['renderMessage' => false]);
        }

        // Se não aceito nem recusado, renderize a mensagem
        return view('livewire.cookies.cookie-consent')->with(['renderMessage' => true]);
    }
};
?>

<div>
    @if(!$accepted && !$declined)
    <div class="bg-gray-100 flex flex-col justify-center ">

        <div x-transition:enter-start="opacity-0 scale-90" x-transition:enter="transition duration-200 transform ease" x-transition:leave="transition duration-200 transform ease" x-transition:leave-end="opacity-0 scale-90" class="max-w-(--breakpoint-lg) mx-auto fixed bg-white inset-x-5 p-5 bottom-40 rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
            <div class="w-full">
                <span class="text-xl font-bold text-gray-900 leading-tight mb-1 lg:text-3xl block">Cookies e Privacidade</span>
                <span class="space-y-4  text-gray-800 text-base leading-8 font-medium md:mb-6">
                    Ao navegar no site, você automaticamente aceita que usemos cookies.
                    Para saber mais leia nossa
                    <a href="https://www.pixseguros.com.br/politica-de-privacidade/" class="text-primary-600" target="_blank">Política de Privacidade</a> e
                    <a href="https://www.pixseguros.com.br/termos-de-servicos/" class="text-primary-600" target="_blank">Termos de Serviços</a>.
                </span>
            </div>
            <div class="flex gap-4 items-center shrink-0">
                <form wire:submit="save">
                    <div class="lg:mt-8 space-x-3 flex rounded-md shadow-sm">
                        <x-button wire:click="accept" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-primary-600 px-5 py-3 text-base font-medium text-white hover:bg-primary-700">
                            Aceitar todos os Cookies
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @endif
</div>