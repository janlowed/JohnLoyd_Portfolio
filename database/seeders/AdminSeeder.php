<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.  
     */
    public function run(): void
    {
        //

        DB::table("users")->insert([
        [
            "name"=> "John",
            "email"=> "aymsogwapo123@gmail.com",
            "password"=> Hash::make("32323232"),
            'role'=> 'admin',
        ],
        [
            'name'=> 'John Loyd Zamora',
            'email'=> 'jl.zamora@mlgcl.edu.ph',
            'password'=> Hash::make('23232323'),
            'role'=> 'spectator',
        ]
    
    ]);

    }
}