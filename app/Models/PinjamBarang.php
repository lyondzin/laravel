<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PinjamBarang extends Model
{
    protected $table = 'pinjam_barangs';

    protected $fillable = [
        
        'peminjam',
        'tgl_pinjam',
        'jml_barang',
        'tgl_kembali',
        'kondisi',
    ];
    protected $primaryKey = 'id'; 
}
