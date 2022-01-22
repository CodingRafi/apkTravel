

<div class="column flex" >
    {{-- berita --}}
    <div class="header">
        <h4>Wisata Kota Depok</h4>
    </div>
    <div class="berita-frame" >
        @for ($i = 0; $i < count($wisatas); $i++)
            <div class="card pt-3" style="max-width: 540px;">
                <a href="show/{{ $wisatas[$i]->slug }}">
                @if (count($fotos[$i]) > 0)
                    <img src="{{ asset("storage/".$fotos[$i][0]->filename) }}" class="card-img-top" alt="...">
                @else
                    <img src="/images/home-screen/berita.jpg" class="card-img-top" alt="...">    
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $wisatas[$i]->nama }}</h5>
                    <p class="card-text">{!! Str::limit($wisatas[$i]->deskripsi, 60) !!}</p>
                </div>
                 </a>
            </div>

        @endfor
    </div>
    <div class="footer">Load More ...</div>
</div>