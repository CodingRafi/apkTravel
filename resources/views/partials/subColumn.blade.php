<div class="column sub flex">
    <h1 style="width: 100%;background: none;box-shadow: none;margin-top: 10px;margin-left: 20px;">{{ $namaHal }}</h1>

    @if (count($datas) > 0)    
        @for ($i = 0; $i < count($datas); $i++)
        {{-- @dd() --}}
            <div class="card bg-dark text-white">
                <div class="bung3" style="max-height: 43vh;overflow: hidden; border-radius: 10px;">
                    @if ($fotoData[$i] == 'images/jika.jpg')
                        <img src="{{ $fotoData[$i] }}" class="card-img">
                        {{-- <img src="/images/home-screen/capture.png" class="card-img"> --}}
                    @else
                        <img src="{{ asset('storage/'. $fotoData[$i]->filename ) }}" class="card-img">
                    @endif
                </div>
                <a href="/show/{{ $datas[$i]->slug }}">
                    <div class="card-img-overlay" style="color: #fff;">
                        <h5 class="card-title">{!! $datas[$i]->nama !!}</h5>
                        <p class="card-text">{!! $datas[$i]->alamat !!}</p>
                    </div>
                </a>
            </div>
        @endfor
        {{-- <div class="card bg-dark text-white">
            <div class="bung3" style="border-radius: 10px;">
                    <img src="/images/home-screen/capture.png" class="card-img">
            </div>
            <a href="/show/aaaaaaaaaaaaaaaaaa">
                <div class="card-img-overlay" style="color: #fff;">
                    <h5 class="card-title">aaaaaaaaaaaaaaaaaa</h5>
                    <p class="card-text">aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa</p>
                </div>
            </a>
        </div>
        <div class="card bg-dark text-white">
            <div class="bung3" style="border-radius: 10px;">
                    <img src="/images/home-screen/clicking.png" class="card-img">
            </div>
            <a href="/show/aaaaaaaaaaaaaaaaaa">
                <div class="card-img-overlay" style="color: #fff;">
                    <h5 class="card-title">aaaaaaaaaaaaaaaaaa</h5>
                    <p class="card-text">aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa</p>
                </div>
            </a>
        </div> --}}
    @else
    <div class="bungkus" style="width: 100%;height: 85%;background: none;display: flex;justify-content: center;align-items: center;">
        <div class="alert alert-primary" role="alert">
            <h2 style="text-align: center;font-size: 1.5rem;">Maaf tidak ada data ditemukan</h2>
          </div>
    </div>
    @endif

</div>