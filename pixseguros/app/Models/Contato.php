<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'email',  
        'phone_celular', 
        'phone_fixo', 
        'subject',  
        'message'
    ];

    public function userContato()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
