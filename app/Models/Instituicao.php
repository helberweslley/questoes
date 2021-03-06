<?php

namespace App;


use App\Models\Questao;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'instituicao';
    protected $fillable = [
        'nome', 'site', 'sigla','site_comissao_vestibular',
    ];


    public function questoes(){
        return $this->hasMany(Questao::class);
    }

}
