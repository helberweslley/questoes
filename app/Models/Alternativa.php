<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $fillable = [
        'texto',
    ];

    public function gabarito(){
        return $this->hasOne(Gabarito::class);
    }

    public function questao(){
        return $this->belongsTo(Questao::class);
    }
}
