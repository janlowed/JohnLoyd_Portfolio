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

    ]);

    DB::table("abouts")->insert([
        [
            "name"=> "John",
            "birthdate"=> "2003-06-23",
            "address"=> 'Liberty Hilongos Leyte',
            'zipcode'=> '6524',
            'email'=> 'aymsogwapo123@gmail.com',
            'phone'=> '09639623877',
        ],

    ]);
    }
}
