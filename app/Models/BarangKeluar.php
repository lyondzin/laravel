<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barang_keluar';

    protected $fillable = [
        'nama_barang',
        'tgl_keluar',
        'jml_keluar',
        'lokasi',
        'penerima',
    ];
    protected $primaryKey = 'id'; 
}
