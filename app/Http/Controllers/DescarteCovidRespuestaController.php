<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DescarteCovidRequest;
use App\DescarteCovidRespuesta;
class DescarteCovidRespuestaController extends Controller
{
    //

    public function respuesta (DescarteCovidRequest $request){
        $usuario = new DescarteCovidRespuesta();
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
