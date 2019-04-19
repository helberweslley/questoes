<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gabarito extends Model
{
    protected $fillable = [
        'gabarito',
    ];

    public function questao(){
        return $this->hasOne(Questao::class);
    }

    public function alternativa(){
        return $this->hasOne(Alternativa::class);
    }
}
