<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registro', 'UsuarioController@Registro');

Route::get('/preguntas1', 'DescarteCovidPreguntaController@listar');
Route::get('/preguntas2', 'PreVacunacionPreguntaController@listar');

Route::post('/respuesta1', 'DescarteCovidRespuestaController@respuesta');
Route::post('/respuesta2', 'PreVacunacionRespuestaController@respuesta');

Route::post('/consentimiento', 'UsuarioController@RegistroUpdate');

Route::post('/correo', 'UsuarioController@EnviarCorreo');

Route::get('/qr', 'UsuarioController@qr');

Route::get('/resultados/{usuario_id}', 'UsuarioController@resultados');
