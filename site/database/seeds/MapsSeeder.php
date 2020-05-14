<?php

use Illuminate\Database\Seeder;

class MapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            'title' => "Paris",
            'lat' => "44.8623715",
            'lon' => "-0.5500191",
        ]);

        DB::table('maps')->insert([
            'title' => "Brest",
            'lat' => "44.845317649260124",
            'lon' => "-0.5730832184174939",
        ]);

        DB::table('maps')->insert([
            'title' => "Quimper",
            'lat' => "44.82567078039429",
            'lon' => "-0.5556991433816871",
        ]);

        DB::table('maps')->insert([
            'title' => "Bayonne",
            'lat' => "44.8310139",
            'lon' => "-0.5726503",
        ]);
    }
}
