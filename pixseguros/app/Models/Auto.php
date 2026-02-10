<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'placa',
        'modificado',
        'leilao',   
        'ano',
        'ano_fabricacao',
        'zero_km',
        'modelo',
        'uso', 
        'bonus',
        'localizacao',
        'experiencia',
        'seguradora',
        'classe_bonus',
        'eCondutorPrincipal',
        'cpf_condutor',
        'name',
        'email',
        'cpf_cnpj',
        'phone_celular',
        'interesse_comunicacoes',
    ];

    public function userCar()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the auto's enderecos.
    */
    // ...existing code...
}



