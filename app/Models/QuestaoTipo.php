<?php

namespace App;

use App\Models\Questao;
use Illuminate\Database\Eloquent\Model;

class QuestaoTipo extends Model
{
    protected $table = 'questao_tipo';

    public function questoes(){
        return $this->belongsToMany(Questao::class);
    }
}
