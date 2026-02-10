<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;
    
    protected $fillable  = [
        'user_id',
        'name', 
        'email',  
        'phone_celular', 
        'cpf_cnpj',
        'representante', 
        'datadenascimento', 
        'identidade', 
        'orgaoexpedidor', 
        'datadeexpedicao', 
        'genero', 
        'estadocivil', 
        'cep', 
        'endereco', 
        'numero', 
        'complemento', 
        'bairro', 
        'cidade', 
        'estado', 
        'renda', 
        'bandeira'
    ];

    public function cartao()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the cartao's enderecos.
     */
    // ...existing code...
}