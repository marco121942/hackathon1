<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescarteCovidPregunta extends Model
{
    //
    protected $fillable = ['pregunta'];

    public function preguntaDescarte()
    {
        return $this->hasMany(DescarteCovidRespuesta::class);
    }
}

