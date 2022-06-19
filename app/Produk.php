<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function jenis_produk()
    {
        return $this->belongsTo(JenisProduk::class,'jenis_produk_id','id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class,'produk_id','id');
    }
}
