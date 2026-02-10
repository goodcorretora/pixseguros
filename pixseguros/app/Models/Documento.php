<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento polimórfico reverso
     */
    public function addressable()
    {
        return $this->morphTo();
    }
}

