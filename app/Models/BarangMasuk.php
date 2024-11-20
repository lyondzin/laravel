<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'barang_masuk';

    protected $fillable = [
       
        'nama_barang',
        'tgl_masuk',
        'jml_masuk',
        
    ];
    protected $primaryKey = 'id'; 
}

