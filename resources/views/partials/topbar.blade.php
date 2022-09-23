<nav class="navbar fixed-top p-0" style="height: 60px;">
    <div class="row m-0 h-100" style="width: 100%;">
        <div class="col-md-auto bg-light bg-gradient shadow position-absolute d-flex align-items-center"
            style="height: 60px; z-index: 1;">
            <a class="navbar-brand" href="#">
                <img src="/images/home-screen/logo-depok.png" alt="" width="30"
                    class="d-inline-block align-text-top" style="object-fit: cover;">
            </a>
            <h4 class="m-0 pe-5">Anjungan Wisata Depok</h4>
        </div>
        <div class="col-md-12 bg-light h-75 p-0 d-flex align-items-center" style="--bs-bg-opacity: .5;">
            @if (isset($beritas))    
                @if (count($beritas) > 0)
                <marquee class="d-flex" behavior="scroll" direction="Left">
                    @foreach ($beritas as $key => $berita)
                    <a class="link-light text-decoration-none d-inline-flex align-items-center me-5" target="_blank"
                        href="/berita/{{ $berita->slug }}" style="color: #222425!important;"><span class="badge text-bg-light m-0 me-2">Berita
                            {{ $key+1 }}</span>{{ $berita->judul }}</a>
                    @endforeach
                </marquee>
                @endif
            @endif
        </div>
    </div>
</nav>