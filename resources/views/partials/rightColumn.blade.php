<div class="column flex">
    {{-- berita --}}
    <div class="berita-kota-depok">
        <h4>Berita Kota Depok</h4>
    </div>
    <div class="berita-frame">
        @foreach ($beritas as $data)
            <div class="card pt-3" style="max-width: 540px;">
                <img src="images/home-screen/berita.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->judul }}</h5>
                    <p class="card-text">{!! $data->body !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>