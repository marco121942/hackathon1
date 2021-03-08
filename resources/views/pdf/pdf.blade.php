<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background:white;
            color :black;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title-container {
            width: 100%;
            display: table;
        }

        .title-item-1,
        .title-item-2 {
            font-weight: bold;
        }

        .title-item-1 {
            width: 70%;
            display: table-cell;
        }

        .title-item-2 {
            width: 30%;
            display: table-cell;
        }

        .table-main:first-child {
            border-top: none !important;
        }

        .table-main {
        padding: 20px 0px;
        width: 100%;
        display: table;
        margin: 15px 0px;
        border-top: 1px solid #d3d4d4;
    }

        .table-item-question {
            width: 70%;
            display: table-cell;
            vertical-align: middle;
        }

        .table-item-answer {
            width: 30%;
            display: table-cell;
            vertical-align: middle;
        }

        .table-item-answer div {
            margin: 0 auto;
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

        .result-container {
            text-align: center;
            padding: 30px 0px;
            background-color: #EAEAEA;
        }

        .result-container .result:first-child {
            font-weight: bold !important;
        }
    </style>
</head>
<body>
    <div class="header">
		<img src="logoOpen.jpeg" alt="logo.png" width="100px" />
    </div>

    <div class="main-title">
        <h2>Resultado de Evaluación de salud pre-vacuna</h2>
        <h3>Triaje</h3>
    </div>

    <div class="title-container">
        <div class="title-item-1">
            <spam>Pregunta</spam>
        </div>
        <div class="title-item-2">
            <spam>Respuesta</spam><spam>
        </div>
    </div>

    <div>

        @foreach($resDescarte as $question)
        <div class="table-main">
            <div class="table-item-question">
                <spam>{{$question->pregunta->pregunta}}</spam>
            </div>
            <div class="table-item-answer">
                <div class="table">
                    <div class="table-item border-child-1 <?php if($question->respuesta == "SI") { echo "select-option"; } else { echo ""; } ?>">Si</div>
                    <div class="table-item border-child-2 <?php if($question->respuesta == "NO") { echo "select-option"; } else { echo ""; } ?>" >No</div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($resPreVacuna as $question)
        <div class="table-main">
            <div class="table-item-question">
                <spam>{{$question->pregunta->pregunta}}</spam>
            </div>
            <div class="table-item-answer">
                <div class="table">
                    <div class="table-item border-child-1 <?php if($question->respuesta == "SI") { echo "select-option"; } else { echo ""; } ?>">Si</div>
                    <div class="table-item border-child-2 <?php if($question->respuesta == "NO") { echo "select-option"; } else { echo ""; } ?>" >No</div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="result-container">
        <div class="result">
            <p>Resultado de Evaluación: <span><?php if($resultado[0]['final'] == true) { echo 'DESAPROBADO' ;} else { echo 'APROBADO' ;} ?></span> </p>
        </div>
        <div class="result">
            <p>Descarte de Covid-19: <span><?php if($resultado[0]['descarte'] == true) { echo 'DESAPROBADO' ;} else { echo 'APROBADO' ;} ?></span> </p>
        </div>
        <div class="result">
            <p>Evaluación pre-vacunación:  <span><?php if($resultado[0]['pre_vacunacion'] == true) { echo 'DESAPROBADO' ;} else { echo 'APROBADO' ;} ?></span></p>
        </div>
    </div>
    <div class="ContenedorQR">

    </div>
</body>
</html>
