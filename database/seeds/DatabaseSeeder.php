<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(Clientes::class);
        $this->call(ArticulosSeeder::class);
        $this->call(clientePerfilSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(CalificacionesSeeder::class);
        $this->call(ArticulosClientesSeeder::class);
    }
}
