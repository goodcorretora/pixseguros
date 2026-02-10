<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consorcio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf_cnpj', 
        'representante', 
        'consorcio'
    ];

    public function userConsorcio()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
