<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => "utilisateur@gmail.com",
            'password' => Hash::make('password'),
            'role' => "user"
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => "admin@mail.com",
            'password' => Hash::make('password'),
            'role' => "admin"
        ]);
    }
}