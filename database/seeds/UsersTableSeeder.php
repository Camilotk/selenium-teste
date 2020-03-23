<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            0 => [
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@test.com.br',
                'password' => Hash::make('123456')
            ],
        ]);
    }
}