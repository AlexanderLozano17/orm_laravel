<?php

use App\Calificaciones;
use Illuminate\Database\Seeder;

class CalificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataCalificaciones = [
            array (
                'calificacion' => 8,
                'calificacion_id' => 4,
                'calificacion_type' => 'App\Articulo',
            ),
            array (
                'calificacion' => 4,
                'calificacion_id' => 1,
                'calificacion_type' =>  'App\Cliente'
            ),
            array (
                'calificacion' => 5,
                'calificacion_id' => 3,
                'calificacion_type' =>  'App\Cliente',
            ),
            array (
                'calificacion' => 6,
                'calificacion_id' => 3,
                'calificacion_type' => 'App\Articulo',
            ),
        ];

        foreach ($dataCalificaciones as $calificaciones) {
            Calificaciones::create($calificaciones);
        }
    }
}
