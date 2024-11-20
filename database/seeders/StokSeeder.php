<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok')->insert([
            [
                'id' => '222',
                'nama_barang' => 'jamur',
                'jml_masuk' => '4',
                'jml_keluar' => '3',
                'total_barang' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
}
