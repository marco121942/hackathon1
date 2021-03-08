<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescarteCovidPregunta extends Model
{
    //
    protected $fillable = ['pregunta'];

    public function respuestas()
    {
        return $this->hasMany(DescarteCovidRespuesta::class);
    }
}

