<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '232',
                'name' => 'jamurs',
                'username' => 'leodn',
                'password' => 'elelw',
                'level' => 'haspy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
}
