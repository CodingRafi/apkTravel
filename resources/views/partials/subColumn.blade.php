<div class="column sub flex">
    @for ($i = 0; $i < count($datas); $i++)
        <div class="card bg-dark text-white">
            @if ($fotoData[$i] == 'images/jika.jpg')
                <img src="{{ $fotoData[$i] }}" class="card-img">
            @else
                <img src="{{ asset('storage/'. $fotoData[$i] ) }}" class="card-img">
            @endif
            <a href="/show/{{ $datas[$i]->slug }}">
                <div class="card-img-overlay">
                    <h5 class="card-title">{!! $datas[$i]->nama !!}</h5>
                    <p class="card-text">{!! $datas[$i]->alamat !!}</p>
                </div>
            </a>
        </div>
    @endfor
</div>