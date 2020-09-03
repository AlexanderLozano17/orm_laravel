<?php

use App\ClientePerfiles;
use Illuminate\Database\Seeder;

class clientePerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataClientePerfil = [
            array (
                'cliente_id' => 1,
                'perfil_id' => 2
            ),
            array (
                'cliente_id' => 2,
                'perfil_id' => 1
            ),
            array (
                'cliente_id' => 3,
                'perfil_id' => 2
            ),
            array (
                'cliente_id' => 4,
                'perfil_id' => 3
            ),
        ];

        foreach ($dataClientePerfil as $value) { 
            ClientePerfiles::create($value);
        }
    }
}
