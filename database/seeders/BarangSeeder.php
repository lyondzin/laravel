<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
           
            [
                'id' => '223',
                'nama_barang' => 'jamusr',
                'spesifikasi' => 'okse',
                'lokasi' => 'baguss',
                'kondisi' => 'bagss',
                'jumlah_barang' => '2222',
                'sumber_dana' => 'jamusr',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
