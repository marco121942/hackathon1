<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescarteCovidRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descarte_covid_respuestas', function (Blueprint $table) {
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
                ->on('descarte_covid_preguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descarte_covid_respuestas');
    }
}
