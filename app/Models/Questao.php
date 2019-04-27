<?php

namespace App\Models;

use App\Instituicao;
use App\QuestaoTipo;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questao';
    protected $fillable = [
        'questao','ano',
    ];

    public function tipo(){
        return $this->belongsTo(QuestaoTipo::class);
    }

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
