<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use Illuminate\Support\Facades\Http;
use App\Usuario;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\ImmMailable;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\DescarteCovidRespuesta;
use App\PreVacunacionRespuesta;
class UsuarioController extends Controller
{
    //
    public function Registro(RegistroRequest $request)
    {
        $dni = $request->input("dni");
        $cui = $request->input("cui");
        $datoUsuario = Usuario::where('dni', $dni)->first(['dni','id','nombre']);
        // dd($datoUsuario);
        if($datoUsuario !== null){
            return response()->json([
                "status" => 200,
                "metodo" => "login",
                "name" => $datoUsuario->nombre,
                "usuario_id" => $datoUsuario['id'],
                "message" => "Puede iniciar"
            ], 200);

        }
        $urlEnpoint = "https://dni.optimizeperu.com/api/persons/{$dni}";
        $data = Http::get($urlEnpoint);
        if ($cui === $data['cui']) {
            $usuario = new Usuario();
            $usuario->dni = $request->input("dni");
            $usuario->nombre = $data['name'];
            $usuario->primer_apellido = $data['first_name'];
            $usuario->segundo_apellido = $data['last_name'];
            $usuario->cui = $data['cui'];
            $usuario->fecha_reg = date("Y-m-d");
             $usuario->save();
            return response()->json([
                "status" => 200,
                "name" =>$data['name'],
                "metodo" => "registro",
                "usuario_id" => $usuario->id,
                "message" => "Puede iniciar"
            ],200);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "No Puede iniciar"
            ], 500);
        }
    }


    public function RegistroUpdate(Request $request){
        $data = Usuario::find($request->input("usuario_id"));
        $data->fig_acepto = $request->input("fig_acepto");
        $data->save();
        return response()->json([
            "status" => 200,
            "message" => "Acepto vacunarme"
        ], 200);

    }
    public function EnviarCorreo(Request $request)
    {
        $user = Usuario::find($request->input("usuario_id"));
        $nombre= $user-> nombre;
        $name = $user-> nombre . date("Y") . date("m") . date("d").'-Informe';
        $name2 = $user->nombre . date("Y") . date("m") . date("d") .'-Declaración';
        $namePdf= '/storage/'.$name .'.pdf';
        $nameqr = $name . '.svg';
        QrCode::generate(env('APP_URL'). $namePdf, public_path() . '/qrcodes/' . $nameqr);
        $user->pdf =  $name;
        $user->cod_qr =  $nameqr;
        $user->save();

        $preguntas=$user->userRespDescarte;
        foreach($preguntas as $pregunta){
            $pregunta->pregunta;
        }


        $pdf = PDF::loadView('pdf.pdf', compact('preguntas'));

        $pdf2 = PDF::loadView('pdf.informe', compact('user'));
        $pdf->save(public_path() . '/storage/' . $name . '.pdf');
        $pdf2->save(public_path() . '/storage/' . $name2 . '.pdf');
        $informe = $pdf->output();
        $informe2 = $pdf2->output();


        Mail::to($request->input("correo"))->send(new ImmMailable($informe, $informe2,$name, $name2, $nombre));

        return response()->json([
            "status" => 200,
            "message" => "Revise su correo",
        ], 200);
    }

    public function resultados($usuario_id){

        $descarteCovid =DescarteCovidRespuesta::where('usuario_id', $usuario_id)->get(['respuesta']);
        $respuestaDescarte=[];
        $Prevacunacion = PreVacunacionRespuesta::where('usuario_id', $usuario_id)->get(['respuesta']);
        $respuestaPrevacunacion = [];

        foreach($descarteCovid as $descarte){
            array_push($respuestaDescarte, $descarte->respuesta);
        }
        foreach ($Prevacunacion as $pre) {
            array_push($respuestaPrevacunacion, $pre->respuesta);
        }
        return response()->json([
            "descarte" => in_array("SI", $respuestaDescarte),
            "preVacuna" => in_array("SI", $respuestaPrevacunacion)
        ], 200);
    }
    public function qr(){
        QrCode::generate('Make me into a QrCode!', '../public/qrcodes/qrcode.svg');
    }
}
