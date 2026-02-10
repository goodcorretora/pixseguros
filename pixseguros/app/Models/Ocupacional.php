<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupacional extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'representante', 
        'email', 
        'phone_celular', 
        'phone_fixo', 
        'cnpj', 
        'cep', 
        'endereco', 
        'numero', 
        'complemento', 
        'bairro', 
        'cidade', 
        'estado', 
        'funcionarios', 
        'ocupacional', 
        'seguranca', 
        'ergonomico', 
        'ambulatorio', 
        'pericia', 
        'promocao'
    ];

    protected $casts = [
        'ocupacional' => 'boolean',
        'seguranca' => 'boolean',
        'ergonomico' => 'boolean',
        'ambulatorio' => 'boolean',
        'pericia' => 'boolean',
        'promocao' => 'boolean',
    ];

    public function userOcupacional()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relacionamento polimórfico: Ocupacional -> Enderecos
     */
    public function enderecos()
    {
        return $this->morphMany(\App\Models\Endereco::class, 'addressable');
    }
}