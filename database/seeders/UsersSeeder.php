<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder             //php artisan make:seeder UsersSeeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "user_name" => Str::random(10),
            "email" => Str::random(8) . '@xyz.com',
            "password" => Str::random(8)
        ]);

        /* Run seeding commands=>
        Run all seeding files =>
        php artisan db:seed
        One class (single seeding file) =>
        php artisan db:seed --class=NameOfTheSeeder
        */
    }
}
