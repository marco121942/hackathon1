<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreVacunacionPregunta extends Model
{
    //
    protected $fillable = ['pregunta'];

    public function respuestas()
    {
        return $this->hasMany(PreVacunacionRespuesta::class);
    }
}
