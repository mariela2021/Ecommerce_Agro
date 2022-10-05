<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Factu;
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
        //\App\Models\User::factory(20)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubCategoriaSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(OauthClienteSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(CarritoSeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(TarjetaSeeder::class);
    }
}
