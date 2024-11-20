<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang_masuk')->insert([
            [
                'id' => '112',
                'nama_barang' => 'jadmur',
                'tgl_masuk' => '12/2/12',
                'jml_masuk' => '3',
                'id' => '999',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
