<?php

use App\Articulo;
use Illuminate\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArticilos = [
            array(
                'cliente_id' => 1,
                'nombre_articulo' => 'Camiseta',
                'precio' => 45000,
                'pais_region' => 'Colombia',
                'observacion' => '',
            ),
            array(
                'cliente_id' => 2,
                'nombre_articulo' => 'pantalon',
                'precio' => '60000',
                'pais_region' => 'Colombia',
                'observacion' => '',
            ),
            array(
                'cliente_id' => 3,
                'nombre_articulo' => 'gorra',
                'precio' => '20000',
                'pais_region' => 'Colombia',
                'observacion' => '',
            ),
            array(
                'cliente_id' => 3,
                'nombre_articulo' => 'zapatos',
                'precio' => '120000',
                'pais_region' => 'Colombia',
                'observacion' => '',
            ),
        ];

        foreach ($dataArticilos as $value) {
            Articulo::create($value);
        }
    }
}
