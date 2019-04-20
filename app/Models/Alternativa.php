<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $fillable = [
        'texto',
    ];

    public function questao(){
        return $this->belongsTo(Questao::class);
    }
}
