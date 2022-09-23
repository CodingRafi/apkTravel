@extends('main')

@section('tambahcss')
<style>
    * {
        font-family: 'Nunito';
    }

    body {
        overflow: overlay;
    }

    body::-webkit-scrollbar {
        width: 20px;
    }

    body::-webkit-scrollbar-track {
        background-color: transparent;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #ffffff91;
        border-radius: 20px;
        border: 6px solid transparent;
        background-clip: content-box;
    }

    body::-webkit-scrollbar-thumb:hover {
        background-color: #a8bbbf;
    }

    iframe {
        border-radius: 10px;
        border: 1px solid lightgray;
        height: 360px !important;
        width: 100% !important;
    }

    nav.fixed-bottom span.text-dark {
        display: none;
    }

    @media (min-width: 768px) {
        nav .col-md-auto.bg-light.bg-gradient.shadow.position-absolute.d-flex.align-items-center {
            border-radius: 0 0 100px 0 !important;
        }

        nav.navbar.fixed-bottom.bg-light.bg-gradient.shadow {
            border-radius: 30% 30% 0 0 !important;
        }

        nav.fixed-bottom span.text-dark {
            display: inline;
        }

        nav .accordion {
            width: 75% !important;
        }

        .container .col-md-6 hr {
            display: none !important;
        }
    }

</style>
@endsection

@section('content')
<div class="container" style="padding-block: 65px;">
    <div class="row g-2">
        <div class="col-md-7">
            <div class="card h-100">
                <div class="card-header">
                    <a class="btn btn-outline-secondary" href="/{{ $urlBack }}" role="button">Liat {{ $title }} lainnya..</a>
                </div>
                @if (count($foto))
                <img src="{{asset("storage/".$foto[0]->filename)}}"
                class="img-fluid    rounded" alt="..." style="height: 300px; object-fit: cover;">
                @endif
                <div class="card-body">
                    {!! $data[0]->deskripsi !!}
                </div>
                <div class="container" style="padding-bottom: 1rem;">
                    @if (count($koleksis))
                        @if ($koleksiFoto)
                            @foreach ($koleksiFoto as $item)
                            <hr>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->nama }}</h6>
                            <div id="carouselExampleIndicators{{ $item->id }}" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    @for ($i = 0; $i < count($item->foto); $i++)
                                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide-to="{{ $i }}"
                                    @if ($i == 0) class="active" @endif" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                                    @endfor
                                </div>
                                <div class="carousel-inner rounded gallery" style="background: rgba(0, 0, 0, 0.25);">
                                    @for ($i = 0; $i < count($item->foto); $i++)
                                    <div class="carousel-item @if ($i == 0) active @endif">
                                        <a href="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100"><img src="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100" alt="..." style="height: 150px; object-fit: scale-down;"></a>
                                    </div>
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            @endforeach
                        @endif
                        @if ($koleksiVideo)
                            @foreach ($koleksiVideo as $item)
                            <hr>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->nama }}</h6>
                            <div id="carouselExampleIndicators{{ $item->id }}" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    @for ($i = 0; $i < count($item->video); $i++)
                                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide-to="{{ $i }}"
                                    @if ($i == 0) class="active" @endif" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                                    @endfor
                                </div>
                                <div class="carousel-inner rounded gallery" style="background: rgba(0, 0, 0, 0.25);">
                                    @for ($i = 0; $i < count($item->video); $i++)
                                    <div class="carousel-item @if ($i == 0) active @endif">
                                        <a href="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100"><video src="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100" alt="..." style="margin: auto; object-fit: scale-down;" controls></a>
                                    </div>
                                    @endfor
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $item->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div>
                            <img class="rounded-circle" src="{{ asset("storage/".$data[0]->logo) }}" alt="logo" width="40" height="40" style="object-fit: cover;">
                        </div>
                        <div>
                            <h5 class="card-title">{{ $data[0]->nama }}</h5>
                            <h6 class="card-subtitle text-muted">{{ $title }}</h6>
                        </div>
                    </div>
                    <hr>
                    <dl class="row">
                        <dt class="col-sm-5">No. Telp</dt>
                        <dd class="col-sm-7">{{$data[0]->no_telp}}</dd>

                        <dt class="col-sm-5">Alamat <i class="bi bi-geo-alt-fill ms-2"></i></dt>
                        <dd class="col-sm-7">{!! $data[0]->alamat !!}</dd>

                        <dt class="col-sm-5">Pengelola</dt>
                        <dd class="col-sm-7">{!! $data[0]->pengelola !!}</dd>

                        @isset($data[0]->instagram) 
                        <dt class="col-sm-5 text-truncate">Instagram</dt>
                        <dd class="col-sm-7">{{$data[0]->instagram}}</dd>
                        @endisset
                        
                        @isset($data[0]->youtube) 
                        <dt class="col-sm-5">youtube <i class="bi bi-youtube ms-2"></i></dt>
                        <dd class="col-sm-7">{{ $data[0]->youtube }}</dd>
                        @endisset
                        
                        @isset($data[0]->twitter) 
                        <dt class="col-sm-5">twitter <i class="bi bi-twitter ms-2"></i></dt>
                        <dd class="col-sm-7">{{$data[0]->twitter}}</dd>
                        @endisset
                        
                        @isset($data[0]->facebook) 
                        <dt class="col-sm-5">Facebook <i class="bi bi-facebook ms-2"></i></dt>
                        <dd class="col-sm-7">{{$data[0]->facebook}}</dd>
                        @endisset
                        
                        @isset($data[0]->whatsapp) 
                        <dt class="col-sm-5">Whatsapp <i class="bi bi-whatsapp ms-2"></i></dt>
                        <dd class="col-sm-7">{{$data[0]->whatsapp}}</dd>
                        @endisset
                        
                        @isset($data[0]->website) 
                        <dt class="col-sm-5">Website</dt>
                        <dd class="col-sm-7">{{$data[0]->website}}</dd>
                        @endisset
                    </dl>
                    @isset($data->first()->iframe)
                    {!! $data->first()->iframe !!}
                    @endisset
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('tambahjs')
<script>
    $('#gambarPeta')
        .mapster({
            fill: true,
            fillColor: '3320ff',
            fillOpacity: 0.8,
            render_highlight: {
                fill: true,
                fillColor: "FF0000",
                fillOpacity: 1,
                stroke: false
            },
            fadeInterval: 50,
            mapKey: 'data-key'
        })
        .mapster('set', true,
            'tapos,cilodong,cipayung,sawangan,bojongsari,sukmajaya,pancoranmas,cimanggis,beji,limo,cinere');

    function pindah() {
        window.setTimeout(function () {
            window.location.href = '/';
        }, 5000);
    }

</script>
<script>
    /*** 1.0 - time ***/
    function showTime() {
        var date = new Date();
        var h = date.getHours();
        var m = date.getMinutes();
        var s = date.getSeconds();
        var session = "AM";

        if (h == 0) {
            h = 12;
        }

        if (h > 12) {
            h = h - 12;
            session = "PM";
        }

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        var time = h + " : " + m + " " + session;
        document.getElementById("jam").innertext = time;
        document.getElementById("jam").textContent = time;

        setTimeout(showTime, 1000);
    }

    showTime();

    /*** 2.0 - date ***/
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '/' + mm + '/' + dd;

    var parts = today.split('/');
    var mydate = new Date(parts[0], parts[1] - 1, parts[2]);

    document.getElementById("date").innertext = mydate.toDateString();
    document.getElementById("date").textContent = mydate.toDateString();


    /*** 3.0 - timer ***/
    let timer, currSeconds = 0;

    function resetTimer() {

        /* Hide the timer text */
        document.querySelector(".timertext")
            .style.display = 'none';

        /* Clear the previous interval */
        clearInterval(timer);

        /* Reset the seconds of the timer */
        currSeconds = 0;

        /* Set a new interval */
        timer =
            setInterval(startIdleTimer, 1000);
    }

    // Define the events that
    // would reset the timer
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer;
    window.ontouchstart = resetTimer;
    window.onclick = resetTimer;
    window.onkeypress = resetTimer;

    function startIdleTimer() {

        /* Increment the
            timer seconds */
        currSeconds++;

        /* Set the timer text
            to the new value */
        document.querySelector(".secs")
            .textContent = currSeconds;

        /* Display the timer text */
        document.querySelector(".timertext")
            .style.display = 'block';
        if (currSeconds == 55) {
            pindah();
        }
    }
</script>
<script>
    $(document).ready(function () {
        $(".gallery a").fancybox();
    });

</script>
@endsection

