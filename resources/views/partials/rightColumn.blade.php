

<div class="column flex">
    {{-- berita --}}
    <div class="berita-kota-depok">
        <h4>Berita Kota Depok</h4>
    </div>
    <div class="berita-frame">
        @for ($i = 0; $i < count($beritas); $i++)
            <div class="card pt-3" style="max-width: 540px;">
                <a href="show/{{ $beritas[$i]->slug }}">
                @if (count($fotos[$i]) > 0)
                    <img src="{{ $fotos[$i][0]->filename }}" class="card-img-top" alt="...">
                @else
                    <img src="images/home-screen/berita.jpg" class="card-img-top" alt="...">    
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $beritas[$i]->judul }}</h5>
                    <p class="card-text">{!! Str::limit($beritas[$i]->body, 60) !!}</p>
                </div>
                 </a>
            </div>

        @endfor
    </div>
</div>
