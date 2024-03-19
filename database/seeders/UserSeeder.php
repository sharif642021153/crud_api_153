<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "Pathaphi PK",
                    "email" => "pathaphi.pk@gmail.com",
                    "password" => Hash::make('123456'),
                    "telephone" => "0640091297",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
            ]
        );
    }
}
