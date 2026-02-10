<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odonto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf_cnpj',
        'representante',
        'odonto'
    ];

    public function userOdonto()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the odonto's enderecos.
     */
    // ...existing code...
}
