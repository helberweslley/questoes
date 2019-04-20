<?php

namespace App\Models;

use App\Instituicao;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = [
        'questao','ano',
    ];

    public function questoes(){
        return $this->belongsToMany(Materia::class);
    }

    public function instituicao(){
        return $this->belongsTo(Instituicao::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function alternativas(){
        return $this->hasMany(Alternativa::class);
    }
}
