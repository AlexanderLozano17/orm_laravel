<?php

use App\ArticulosClientes;
use Illuminate\Database\Seeder;

class ArticulosClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array(
                'cliente_id' => 1,
                'articulo_id' => 2,
            ),
            array(
                'cliente_id' => 1,
                'articulo_id' => 3,
            ),
            array(
                'cliente_id' => 2,
                'articulo_id' => 3,
            ),
            array(
                'cliente_id' => 2,
                'articulo_id' => 2,
            ),
            array(
                'cliente_id' => 2,
                'articulo_id' => 1,
            ),
        ];

        foreach ($data as $value) {
            ArticulosClientes::create($value);
        }
    }
}
