<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'materia',
    ];

    public function questoes(){
        return $this->belongsToMany(Questao::class);
    }

    public function disciplina(){
        return $this->belongsTo(Disciplina::class);
    }
}
