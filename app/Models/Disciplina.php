<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';
    protected $fillable = [
        'disciplina',
    ];

    public function materias(){
        return $this->hasMany(Materia::class);
    }
}
