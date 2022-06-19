<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
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
           <div class="table-responsive">
               <table class="table text-center">
                   <thead>
                       <tr>
                           <td>No. </td>
                           <td>Gambar</td>
                           <td>Keterangan</td>
                           <td>Jumlah</td>
                           <td>Harga</td>
                           <td><strong>Total Harga</strong></td>
                       </tr>
                   </thead>
                   <tbody class="lead" style="font-size: 16px">
                       <?php $no = 1 ?>
                       @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td> 
                                <img src="{{ url('assets/produk') }}/{{ $pesanan_detail->produk->gambar }}" class="img-fluid" width="100px">
                            </td>
                            <td>
                                {{ $pesanan_detail->produk->nama }}
                            </td>
                            <td>
                                {{ $pesanan_detail->jumlah_pesanan }}
                            </td>
                            <td>
                                Rp. {{ number_format($pesanan_detail->produk->harga) }}
                            </td>
                            <td>
                                <strong>Rp. {{ number_format($pesanan_detail->total_harga) }}</strong>
                            </td>
                            <td>
                                <i wire:click="destroy({{ $pesanan_detail->id }})" class="fas fa-trash-alt trash-button"style="color:red"></i>
                            </td>
                        </tr>
                       @empty
                        <tr>
                            <td colspan="7" class="alert alert-danger"><strong>Data Kosong</strong></td>
                        </tr>
                       @endforelse

                       @if (!empty($pesanan))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Harga :</strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>PPN :</strong></td>
                            <td align="right"> <strong>Rp. {{ number_format($pesanan->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr style="font-weight: bolder">
                            <td colspan="6" align="right"><strong>Total Pembayaran :</strong></td>
                            <td align="right"><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong></td>
                            <td></td>
                        </tr>
                        <tr style="font-weight: bolder">
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{ route('checkout') }}" class="btn btn-success btn-blok"> <i class="fas fa-arrow-right mr-1"></i>Checkout</a>
                            </td>
                            <td></td>
                        </tr>
                           
                       @endif
                   </tbody>
               </table>
           </div>
       </div>
    </div>

</div>
