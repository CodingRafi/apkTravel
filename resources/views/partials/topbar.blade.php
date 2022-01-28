<div class="topbar">
    <div class="topbar-head flex">
        <img src="/images/home-screen/logo-depok.png" alt="logo-kota-depok">
        <h2>Kota Depok</h2>
    </div>
    <div class="topbar-body flex">
        <marquee behavior="scroll" direction="left">
            @for ($i = 0; $i < 3; $i++)
            <a class="h6 font-weight-light" href="{{ $rss[$i]['link'] }}"><span class="position-relative mx-2 badge badge-primary rounded-0">Berita {{ $i+1 }} </span> {{$rss[$i]['title']}}</a>
            @endfor
        </marquee>
    </div>
</div>
