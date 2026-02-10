<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'phone_celular', 
        'cpf_cnpj',
        'representante', 
        'saude'
    ];

    public function userSaude()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
