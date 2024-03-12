<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('12345678')
            ],
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('12345678')
            ]
            ]);
    }
}
