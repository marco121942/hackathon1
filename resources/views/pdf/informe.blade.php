<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    Body{
        background:white;
        color :black;
    }
    .Cabecera{
        width: 100%;
        height:8%;
        background:white;

    }
    .Titulo{
        width: 100%;
        height:10%;
        text-align:center;
        background:white;
        font-family: Calibri, sans-serif;
    }
    .Cuerpo{
        width: 100%;
        height:40%;
        justify-content: center;
        background:white;
        font-family: Calibri, sans-serif;
        font-size: 20px;
        line-height: 150%
    }
    .ContenedorQR {
        width: 100%;
        height:150px;
        float:left;
        text-align:center;
        padding-top: 50px;
    }


    </style>
</head>
<body>
    <div class="Cabecera">
        <img src="logoOpen.jpeg" height=76px widht=40px>
    </div>
    <div class="Titulo">
        <h2>Declaración de consentimiento informado</h2>
        <h3>Triaje</h3>
    </div>

    <div class="Cuerpo">
        <p>
        <span>Yo,
        <span><strong>{{$user['nombre']}} {{$user['primer_apellido']}}</strong></span>
        <span>con DNI {{$user['dni']}} declaro haber sido informado(a) de los beneficios y potenciales efectos adversos de la vacuna contra la COVID19 y resueltas todas las preguntas y dudas al respecto, consciente de mis derechos y en forma voluntaria, en cumplimiento de la Resoluci&oacute;n N&ordm; 848-2020/MINSA<strong>&nbsp;doy mi consentimiento para que el personal de salud, me aplique la vacuna contra el COVID 19.</strong></span> </span>
        </p>
        <br>
         @if ($user['fig_acepto'] === 0)
        <p><span>Respuesta:</span>No, Doy mi consentimiento </p>
        @else
        <p><span>Respuesta:</span>Si, Doy mi consentimiento </p>
        @endif
        <p><span>Fecha de respuesta: {{$user['fecha_reg']}}</span></p>
    </div>

    <div class="ContenedorQR">

    </div>
</body>
</html>
