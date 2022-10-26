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
            'name' => "Manuel Hernandez",
            'email' => 'mdiaz_19@alu.uabc.mx',
            'password' => Hash::make('password'),
        ]);
    }
}
