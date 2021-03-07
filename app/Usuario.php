<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = ['dni', 'nombre', 'primer_apellido', 'segundo_apellido', 'cui', 'fig_acepto', 'cod_qr', 'fecha_reg'];

    public function userRespDescarte()
    {
        return $this->hasMany(DescarteCovidRespuesta::class);
    }

    public function userRespPre()
    {
        return $this->hasMany(PreVacunacionRespuesta::class);
    }
}
