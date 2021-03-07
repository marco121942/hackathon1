<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EvaluacionPreVacunacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pre_vacunacion_preguntas')->insert([
            'pregunta' => '¿Es alérgico a algún medicamento, alimento, vacuna o al látex?'
        ]);

        DB::table('pre_vacunacion_preguntas')->insert([
            'pregunta' => '¿Tiene alguna enfermedad crónica?'
        ]);

        DB::table('pre_vacunacion_preguntas')->insert([
            'pregunta' => '¿Tienes leucemia, cáncer o alguna otra enfermedad que afecte la efectividad de la vacuna?'
        ]);

        DB::table('pre_vacunacion_preguntas')->insert([
            'pregunta' => '¿Ha recibido algún tratamiento continuo en los últimos 15 días o transfusiones de sangre o derivados en los últimos 6 meses?'
        ]);

        DB::table('pre_vacunacion_preguntas')->insert([
            'pregunta' => '¿Convive con personas de edad avanzada o alguna persona con cáncer, trasplantes, recibe quimioterapia corticoide o alguna otra circunstancia que afecte a la inmunidad?'
        ]);
    }
}
