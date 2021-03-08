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
        font-family: Arial, Helvetica, sans-serif;
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
    }
    .ContenedorTit{
        width: 100%;
        height:3%;
    }
    .TitPreg{
        background:white;
        width: 70%;
        height:3%;
        float:left;
    }
    .TitRes {
        background:white;
        width: 30%;
        height:3%;
        float:left;
    }
    .ContenedorPreg{
        width: 100%;
        height:80px;
    }
    .Pregunta{
        background:white;
        width: 70%;
        height:80px;
        float:left;
        margin: 0;
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }
    .Respuesta {
        background:white;
        width: 30%;
        height:80px;
        float:left;
        text-align:center;
        align-items:center;
    }
    .ContenedorRes {
        background:gray;
        width: 100%;
        height:200px;
        text-align:center;
    }
    .Resumen{
        width: 100%;
        height: 40px;
    }
    .ContenedorQR {
        width: 100%;
        height:150px;
        float:left;
        text-align:center;
        padding-top: 50px;
    }

    .table-main {
        display: table;
        width: 100%;
        margin-bottom: 15px;
    }

    .table-item-question {
        display: table-cell;
        width: 70%;
    }

    .table-item-answer {
        display: table-cell;
        width: 30%;
    }

    .table {
        display: table;
        width: 150px;
        height: 40px;
    }

    .table-item {
        width: 75px;
        height: 40px;
        font-weight: bold;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .border-child-1 {
        border: 1px solid #d3d4d4;
    }

    .border-child-2 {
        border-top: 1px solid #d3d4d4;
        border-bottom: 1px solid #d3d4d4;
        border-right: 1px solid #d3d4d4;
    }

    .select-option {
        background-color: #FF5B5B;
        border-color: #FF5B5B;
        color: #ffffff;
    }
    </style>
</head>
<body>
    <div class="Cabecera">

    </div>

    <div class="Titulo">
        <h2>Resultado de Evaluación de salud pre-vacuna</h2>
        <h3>Triaje</h3>
    </div>
    <div class="table-main">
        <div class="table-item-question">
            <spam>Pregunta</spam>
        </div>
        <div class="table-item-answer">
            <spam>Respuesta</spam><spam>
        </div>
    </div>

    @foreach($preguntas as $question)
    <div class="table-main">
        <div class="table-item-question">
            <spam>{{$question->pregunta->pregunta}}</spam>
        </div>
        <div class="table-item-answer">
            <div class="table">
                <div class="table-item border-child-2 <?php if($question->respuesta == "SI") { echo "select-option"; } else { echo ""; } ?>">Si</div>
                <div class="table-item border-child-2 <?php if($question->respuesta == "NO") { echo "select-option"; } else { echo ""; } ?>" >No</div>
            </div>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="ContenedorRes">
        <div class="Resumen">

        </div>
        <div class="Resumen">
            <spam>Resultado de Evaluación: APROBADA</spam>
        </div>
        <div class="Resumen">
            <spam>Descarte de Covid-19: APROBADA </spam>
        </div>
        <div class="Resumen">
            <spam>Evaluación pre-vacunación:  APROBADA</spam>
        </div>
        <div class="Resumen">

        </div>
    </div>
    <div class="ContenedorQR">

    </div>
</body>
</html>
