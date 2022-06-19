<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Riwayat Pesanan</li>
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
    
    <div class="row mt-4">
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>No. </td>
                        <td>Tanggal Pesan</td>
                        <td>Kode Pemesanan</td>
                        <td>Produk</td>
                        <td>Status</td>
                        <td><strong>Total Harga</strong></td>
                    </tr>
                </thead>
                <tbody class="lead" style="font-size: 16px">
                    <?php $no = 1 ?>
                    @forelse ($pesanans as $pesanan)
                     <tr>
                         <td>{{ $no++ }}</td>
                         <td>{{ $pesanan->created_at }}</td>
                         <td>{{ $pesanan->kode_pemesanan }}</td>
                         <td>
                             <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                            @foreach ($pesanan_details as $pesanan_detail)
                                <img src="{{ url('assets/produk') }}/{{ $pesanan_detail->produk->gambar }}" class="img-fluid" width="50">
                                {{ $pesanan_detail->produk->nama }}
                                <br>
                            @endforeach
                         </td>
                         <td>
                             @if ($pesanan->status == 1)
                             <i class="fas fa-square" style="color: red"></i> Belum Lunas
                             @else
                             <i class="fas fa-square" style="color: green"></i> Lunas
                             @endif
                         </td>
                         <td><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                     </tr>
                    @empty
                     <tr>
                         <td colspan="7">Data Kosong</td>
                     </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
           <div class="card shadow-sm">
               <div class="card-body">
               <h4> <i class="fas fa-info-circle mr-1"></i><strong>Mengingatkan</strong></h4>
                <p>Untuk melakukan pembayaran silahkan transfer ke rekening yang tersedia dibawah ini :</p>
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
               </div>
           </div>
        </div>
   
    </div>
    
</div>
