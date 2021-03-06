<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKategoriModel extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="barang_kategori";
    protected $fillable = [
        'id','title', 'is_aktif', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
