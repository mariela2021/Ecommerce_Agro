<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wishlist::create([
            'cliente_id' => '1'
        ]);

        Wishlist::create([
            'cliente_id' => '2'
        ]);
    }
}
