<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container navbar-custom">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/pethaven.jpg') }}" class="img-fluid" width="80px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" style="font-size: 18px"><i class="fas fa-home mr-1"></i>Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px">
                              Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($jenis_produks as $jenis_produk)
                              <a class="dropdown-item" href="{{ route('produks.jenis', $jenis_produk->id) }}">{{ $jenis_produk->nama }}</a>
                                @endforeach
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('produks') }}">Semua Produk</a>
                            </div>
                          </li>
                          @if (Auth::user())
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('history') }}" style="font-size: 18px">Riwayat Pesanan</a>
                        </li>
                        @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('keranjang') }}" style="font-size: 18px">
                            <i class="fas fa-shopping-cart"></i> 
                            @if ($jumlah_pesanan !== 0)
                            <span class="badge badge-danger">{{ $jumlah_pesanan }}</span>
                            @endif
                        </a>
                    </li>
                    @endif
                   
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="font-size: 18px">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="font-size: 18px">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
