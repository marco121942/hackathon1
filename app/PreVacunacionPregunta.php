<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreVacunacionPregunta extends Model
{
    //
    protected $fillable = ['pregunta'];

    public function preguntaPreVacuna()
    {
        return $this->hasMany(PreVacunacionRespuesta::class);
    }
}
