<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('produks') }}" class="text-dark">List Produk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                </ol>
              </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk shadow">
                <div class="card-body">
                <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h3>{{ $produk->nama }}</h3>
        
        <h5 class="lead mt-1">
            Rp. {{ number_format($produk->harga) }}
            @if($produk->is_ready == 1)
            <span class="badge badge-success ml-2"><i class="fa fa-check" aria-hidden="true"></i> Stok Tersedia</span>
            @else
            <span class="badge badge-danger"><i class="fas fa-times"></i> Stok Habis</span>
            @endif
        </h5>
        
        
        <div class="row">
            <div class="col">
                <form wire:submit.prevent ="masukKeranjang">
                <table class="table" style="border-top: hidden">
                    <tr>
                        <td>Jenis Produk</td>
                        <td>:</td>
                        <td>
                            <img src="{{ url('assets/jenis') }}/{{ $produk->jenis_produk->gambar }}" class="img-fluid" width="50px">
                        </td>
                    </tr>
                    <tr>
                        <td>Merk</td>
                        <td>:</td>
                        <td>{{ $produk->merk }}</td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{ $produk->berat }} kg</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>
                            <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>
                                @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" class="btn btn-primary float-right"  @if($produk->is_ready !== 1) disabled @endif><i class="fas fa-shopping-cart mr-1"></i> Masukkan Keranjang</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
