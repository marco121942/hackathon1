<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreVacunacionPregunta;
class PreVacunacionPreguntaController extends Controller
{
    //
    public function listar()
    {
        $preguntas = PreVacunacionPregunta::all();
        return response()->json($preguntas);
    }
}
