<div class="topbar">
    <div class="topbar-head flex">
        <img src="/images/home-screen/logo-depok.png" alt="logo-kota-depok">
        <h2>Kota Depok</h2>
    </div>
    <div class="topbar-body flex">
        <marquee behavior="scroll" direction="left">
            @foreach ($beritas as $berita)
            <a class="h6 font-weight-light" href="show/{{ $berita->slug }}"><span class="position-relative mx-2 badge badge-primary rounded-0">Berita {{$berita->id}}</span> {{$berita->judul}}</a>
            @endforeach
          
        </marquee>
    </div>
</div>
