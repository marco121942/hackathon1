<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PreVacunacionRequest;
use App\PreVacunacionRespuesta;
class PreVacunacionRespuestaController extends Controller
{
    //
    public function respuesta(PreVacunacionRequest $request)
    {
        $usuario = new PreVacunacionRespuesta();
        $usuario->usuario_id = $request->input("usuario_id");
        $usuario->pregunta_id = $request->input("pregunta_id");
        $usuario->respuesta = $request->input("respuesta");
        $usuario->detalle =   $request->input("detalle");
        $usuario->save();
        return response()->json([
            "status" => 200,
            "message" => "respuesta registrar",
        ], 200);

    }
}
