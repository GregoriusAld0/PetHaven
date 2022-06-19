<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    public function produks()
    {
        return $this->hasMany(Produk::class,'jenis_produk_id','id');
    }
}
