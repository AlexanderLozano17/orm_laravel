<?php

use App\Perfil;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataPerfil = [
            array (
                'nombre' => 'Frecuente'
            ),
            array (
                'nombre' => 'Ocasional'
            ),
            array (
                'nombre' => 'Nuevo'
            ),
        ];

        foreach ($dataPerfil as $value) { 
            Perfil::create($value);
        }
    }
}
