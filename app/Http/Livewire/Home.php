<?php

namespace App\Http\Livewire;

use App\JenisProduk;
use App\Produk;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => Produk::take(4)->get(),
            'jenis_produks' => JenisProduk::all()
        ]);
    }
}
