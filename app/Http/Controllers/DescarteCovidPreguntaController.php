<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DescarteCovidPregunta;
class DescarteCovidPreguntaController extends Controller
{
    //

    public function listar(){
        $preguntas = DescarteCovidPregunta::all();
        return response()->json($preguntas);
    }
}
