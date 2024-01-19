<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
        [
            'name' => 'sharrif',
            'password' => md5("123456"),
            'email' => '642021153@tsu.ac.th',
            'address' => 'tsu',
            'telephone' => '0981111111',
        ],
        [
            'name' => 'bungkai',
            'password' => md5("123456"),
            'email' => '642021111@tsu.ac.th',
            'address' => 'tsu',
            'telephone' => '0982222222',
        ],
        [
            'name' => 'haya',
            'password' => md5("123456"),
            'email' => '642022222@tsu.ac.th',
            'address' => 'tsu',
            'telephone' => '0983333333',
        ]
        ]
    );
    }
}
