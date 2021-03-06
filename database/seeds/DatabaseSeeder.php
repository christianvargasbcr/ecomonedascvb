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
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(CentroTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
        $this->call(UsuarioCentroTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(CuponTableSeeder::class);
        $this->call(CanjeTableSeeder::class);
        $this->call(CanjeDetalleTableSeeder::class);
        $this->call(BilleteraTableSeeder::class);

    }
}
