<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreVacunacionRespuesta extends Model
{
    //
    public function pregunta()
    {
        return $this->belongsTo(PreVacunacionPregunta::class);
    }
}
