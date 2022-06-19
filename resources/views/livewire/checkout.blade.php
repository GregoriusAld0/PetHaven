<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
              </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
       <div class="col">
           <a href="{{ route('keranjang') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left mr-1"></i> Kembali</a>
       </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk melakukan pembayaran silahkan transfer ke rekening yang tersedia dibawah ini sebesar <strong>Rp. {{ number_format($total_harga)  }}</strong></p>
              <div id="accordion">
                <div class="card">
                  <div class="card-body card-body-accordion" id="headingOne">
                    <h5 class="mb-0">
                      <div class="media mt-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <img class="mr-3" src="{{ url('assets/bri.png') }}" alt="Generic placeholder image" width="65px">
                        <div class="media-body">
                          <h5 class="mt-0 pt-2">
                              <strong>Bank BRI</strong><i class="fas fa-chevron-down float-right pr-2"></i>
                            </h5>
                          
                        </div>
                      </div>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse hides" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body card-body-accordion">
                      <p>No. Rekening 01928-89-224 atas nama <strong>Gregorius Aldonis K</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="accordion">
                <div class="card">
                  <div class="card-body card-body-accordion" id="headingOne">
                    <h5 class="mb-0">
                      <div class="media mt-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <img class="mr-3 pt-2" src="{{ url('assets/bca.png') }}" alt="Generic placeholder image" width="65px">
                        <div class="media-body">
                          <h5 class="mt-0 pt-2">
                              <strong>Bank BCA</strong><i class="fas fa-chevron-down float-right pr-2"></i>
                            </h5>
                          
                        </div>
                      </div>
                    </h5>
                  </div>
              
                  <div id="collapseTwo" class="collapse hides" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body card-body-accordion">
                      <p>No. Rekening 01928-89-224 atas nama <strong>Gregorius Aldonis K</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="accordion">
                <div class="card">
                  <div class="card-body card-body-accordion" id="headingOne">
                    <h5 class="mb-0">
                      <div class="media mt-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <img class="mr-3" src="{{ url('assets/ovo2.png') }}" alt="Generic placeholder image" width="65px">
                        <div class="media-body">
                          <h5 class="mt-0 pt-2">
                              <strong>OVO</strong><i class="fas fa-chevron-down float-right pr-2"></i>
                            </h5>
                          
                        </div>
                      </div>
                    </h5>
                  </div>
              
                  <div id="collapseThree" class="collapse hides" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body card-body-accordion">
                      <p>No. Rekening 01928-89-224 atas nama <strong>Gregorius Aldonis K</strong></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">

                <div class="form-group">
                    <label for="">No. Hp</label>
                    <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" wire:model="nohp" value="{{ old('nohp') }}" autocomplete="name" autofocus>
                     @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control @error('nama') is-invalid @enderror"></textarea>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

               <button type="submit" class="btn btn-success btn-block"><i class="fas fa-arrow-right mr-1"> </i>Checkout</button>
            </form>
        </div>
    </div>
</div>
