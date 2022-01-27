<div class="column sub flex">
    <h1>{{ $datas[0]->category->nama }}</h1>
    @for ($i = 0; $i < count($datas); $i++)
    {{-- @dd() --}}
        <div class="card bg-dark text-white">
            <div class="bung3" style="max-height: 43vh;overflow: hidden;">
                @if ($fotoData[$i] == 'images/jika.jpg')
                    <img src="{{ $fotoData[$i] }}" class="card-img">
                @else
                    <img src="{{ asset('storage/'. $fotoData[$i]->filename ) }}" class="card-img">
                @endif
            </div>
            <a href="/show/{{ $datas[$i]->slug }}">
                <div class="card-img-overlay">
                    <h5 class="card-title">{!! $datas[$i]->nama !!}</h5>
                    <p class="card-text">{!! $datas[$i]->alamat !!}</p>
                </div>
            </a>
        </div>
    @endfor
</div>