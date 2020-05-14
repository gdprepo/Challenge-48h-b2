<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => "e-Skate",
            'description' => "description du skate",
            'image' => "https://i0.wp.com/www.blablahightech.fr/wp-content/uploads/2016/06/maxresdefault.jpg",
        ]);

        DB::table('products')->insert([
            'title' => "e-Skate v2",
            'description' => "description du skate",
            'image' => "https://www.eroue.fr/wp-content/uploads/2018/08/skate-electrique-compact-et-sophistique-elwing-boards.jpg",
        ]);

        DB::table('products')->insert([
            'title' => "e-Skate v3",
            'description' => "description du skate",
            'image' => "https://images-na.ssl-images-amazon.com/images/I/71qBLFtiGIL._AC_SX425_.jpg",
        ]);
    }
}
