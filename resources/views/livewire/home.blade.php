<div class="container ">
    {{-- Banner Web --}}
 
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner">
              <img src="{{ url('assets/slider/banner1.png') }}">
          </div>
          </div>
          <div class="carousel-item">
            <div class="banner">
              <img src="{{ url('assets/slider/banner2.png') }}">
          </div>
          </div>
          <div class="carousel-item">
         <div class="banner">
                <img src="{{ url('assets/slider/banner3.png') }}">
            </div>
          </div>
        </div>
      </div>
      
    

    {{-- Jenis Produk --}}
    <section class="pilih-jenisproduk mt-4">
        <h4><strong>Jenis Produk</strong></h4>
        <div class="row mt-3">
            @foreach ($jenis_produks as $jenis_produk)
            <div class="col">
               <a class="hover-jenis" href="{{ route('produks.jenis', $jenis_produk->id) }}">
                <div class="card shadow hover-jenis">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/jenis') }}/{{ $jenis_produk->gambar }}" class="img-fluid">
                      <p class="card-text mt-2 lead">Produk {{ $jenis_produk->jenis }}</p>
                    </div>
                  </div>
               </a>
            </div>
            @endforeach
        </div>
    </section>

     {{-- Best Seller --}}
     <section class="best-seller mt-4 mb-5">
        <h4>
            <strong>Best Seller</strong>
            <a href="{{ route('produks') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-info-circle" aria-hidden="true"> Lihat Semua</i></a>
        </h4>
        <div class="row mt-3">
            @foreach ($produks as $produk)
            <div class="col-md-3">
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
    </section>
</div>
