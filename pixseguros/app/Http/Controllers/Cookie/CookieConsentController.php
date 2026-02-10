<?php

namespace App\Http\Controllers\Cookie;

use App\Http\Controllers\Controller;
use App\Models\Consent;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class CookieConsentController extends Controller
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
            return view('livewire.cookie-consent')->with(['renderMessage' => false]);
        }

        // Se não aceito nem recusado, renderize a mensagem
        return view('livewire.cookie-consent')->with(['renderMessage' => true]);
    }
}
