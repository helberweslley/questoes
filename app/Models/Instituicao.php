<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'nome', 'sigla','site_comissao_vestibular',
    ];
}
