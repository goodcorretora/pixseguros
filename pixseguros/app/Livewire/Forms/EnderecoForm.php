<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class EnderecoForm extends Component
{
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
        session()->flash('message', 'Endereço salvo com sucesso!');
        $this->reset(['name', 'email', 'phone_celular', 'cep', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'estado']);
    }

    public function render()
    {
        return view('livewire.forms.endereco-form');
    }
}
