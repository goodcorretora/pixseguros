<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Previdencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf_cnpj',
        'representante',
        'previdencia'
    ];


    public function userPrevidencia()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the previdencia's enderecos.
     */
    // ...existing code...
}