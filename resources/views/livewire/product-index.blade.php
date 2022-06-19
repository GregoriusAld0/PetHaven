<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List Produk</li>
                </ol>
              </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model = "search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></span>
              </div>
        </div>
    </div>
   
    <section class="best-seller mb-5">
        <div class="row mt-3">
            @foreach ($produks as $produk)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                      <div class="row mt-3">
                          <div class="col-md-12">
                              <h5><strong>{{ $produk->nama }}</strong></h5>
                              <h5>Rp. {{number_format( $produk->harga )}}</h5>
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                           <a href="{{ route('produks.detail', $produk->id) }}" class="btn btn-primary btn-block"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail</a>
                        </div>
                    </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{ $produks -> links() }}
            </div>
        </div>
    </section>
</div>
