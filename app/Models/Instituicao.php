<?php

namespace App;


use App\Models\Questao;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'nome', 'sigla','site_comissao_vestibular',
    ];


    public function questoes(){
        return $this->hasMany(Questao::class);
    }

}
