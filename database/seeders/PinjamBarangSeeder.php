<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pinjam_barang')->insert([
            [
                'id' => '222',
                'peminjam' => 'jamur',
                'tgl_pinjam' => '4/2/23',
                'id' => '223',
                'jml_barang' => '3',
                'tgl_kembali' => '3/2/23',
                'kondisi' => 'dasdas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
}
