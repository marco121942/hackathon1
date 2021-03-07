<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreVacunacionRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_vacunacion_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned()->nullable();
            $table->integer('pregunta_id')->unsigned()->nullable();
            $table->text('respuesta');
            $table->text('detalle')->nullable();
            $table->timestamps();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios');
            $table->foreign('pregunta_id')
                ->references('id')
                ->on('pre_vacunacion_preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_vacunacion_respuestas');
    }
}
