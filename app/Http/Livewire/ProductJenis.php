<?php

namespace App\Http\Livewire;

use App\JenisProduk;
use App\Produk;
use Livewire\Component;
use Livewire\HydrationMiddleware\UpdateQueryString;
use Livewire\WithPagination;

class ProductJenis extends Component
{
    use WithPagination;

    public $search, $jenis_produk;
    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($jenis_produkId)
    {
        $jenis_produk_detail = JenisProduk::find($jenis_produkId);

        if($jenis_produk_detail) {
            $this->jenis_produk = $jenis_produk_detail;
        }
    }

    public function render()
    {
        if ($this->search){
            $produks = Produk::where('jenis_produk_id', $this->jenis_produk->id)-> where('nama','like','%'.$this->search.'%')->paginate(8);
        }
        else {
            $produks = Produk::where('jenis_produk_id', $this->jenis_produk->id)-> paginate(8);
        }

        return view('livewire.product-index', [
            'produks' => $produks,
            'title' => ''.$this->jenis_produk->nama
        ]);
    }
}
