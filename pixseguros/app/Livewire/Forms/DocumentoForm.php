<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\Documento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DocumentoForm extends Component
{
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
            $message->to('contato@goodcorretora.com.br', 'Documentos Pessoais')
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
}
