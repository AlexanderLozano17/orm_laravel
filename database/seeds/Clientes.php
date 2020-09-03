<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class Clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataClientes = [
            array(
                'nombre' => 'Alexander',
                'apellidos' => 'Lozano Velasco',
            ),
            array(
                'nombre' => 'Sandra',
                'apellidos' => 'Velasco',
            ),
            array(
                'nombre' => 'Camila',
                'apellidos' => 'Lozano Velasco',
            ),
            array(
                'nombre' => 'Santiago',
                'apellidos' => 'Velasco',
            ),
        ];

        foreach ($dataClientes as $value) {
            Cliente::create($value);
        }


    }
}
