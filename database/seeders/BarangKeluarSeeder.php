<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang_keluar')->insert([
            [
                'id' => '222',
                'nama_barang' => 'jamur',
                'tgl_keluar' => '1/2/12',
                'jml_keluar' => '2',
                'lokasi' => 'sda',
                'penerima' => 'dasd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
