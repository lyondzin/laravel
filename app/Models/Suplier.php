<?php

namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Suplier extends Model
        {
            protected $table = 'suppliers';

            protected $fillable = [
                
                'nama_supplier',
                'alamat_supplier',
                'telepon_supplier',
    ];

    protected $primaryKey = 'id';


}
