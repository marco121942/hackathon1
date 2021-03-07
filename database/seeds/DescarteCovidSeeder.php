<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DescarteCovidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descarte_covid_preguntas')->insert([
            'pregunta' => 'En las últimas dos semanas, ¿Has dado positivo en COVID-19 o actualmente está siendo monitoreado por COVID-19?'
        ]);

        DB::table('descarte_covid_preguntas')->insert([
            'pregunta' => 'En las últimas dos semanas, ¿Has tenido contacto con alguien que dio positivo en COVID-19? ¿Está en cuarentena?'
        ]);

        DB::table('descarte_covid_preguntas')->insert([
            'pregunta' => '¿Tiene actualmente o has tenido en los últimos 14 días fiebre, escalofríos, tos, dificultad para respirar, falta de aire,fatiga, dolores musculares o corporales, dolor de cabeza, pérdida de gusto y del olfato, dolor de garganta, náuseas,vómitos o diarrea?, ¿Ha recibido plasma de paciente convaleciente?']);
    }
}
