<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescarteCovidRespuesta extends Model
{
    //
    protected $fillable = ['usuario_id', 'pregunta_id','respuesta','detalle'];
}
