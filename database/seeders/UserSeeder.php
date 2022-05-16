<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Jose Luis Corazao',
            'email' => 'joseluis@gmail.com',
            'rol'=> 'Admin',
            'password' => Hash::make('1111111111'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Holgado',
            'email' => 'joseluisholgado@gmail.com',
            'rol'=> 'User',
            'password' => Hash::make('1111111111'),
        ]);
    }
}
