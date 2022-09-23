<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kota Depok</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        type="text/css" media="screen" />
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

        .berita-terkait::-webkit-scrollbar {
            height: 20px;
        }

        .berita-terkait::-webkit-scrollbar-track {
            background-color: transparent;
        }

        .berita-terkait::-webkit-scrollbar-thumb {
            background-color: #92929291;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        .berita-terkait::-webkit-scrollbar-thumb:hover {
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
            nav .col-md-auto.bg-light.bg-gradient.shadow.position-absolute.d-flex.align-items-center.col-3 h4{
                display: block !important;
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
</head>

<body
    style="min-height: 100vh; background-image: url(/images/home-screen/background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <!-- ========================================================= NAVBAR ========================================================= -->
    <nav class="navbar fixed-top p-0" style="height: 60px;">
        <div class="row m-0 h-100" style="width: 100%;">
            <div class="col-md-auto bg-light bg-gradient shadow position-absolute d-flex align-items-center col-3"
                style="height: 60px; z-index: 1; border-radius: 0 0 100px 0;">
                <a class="navbar-brand" href="#">
                    <img src="/images/home-screen/logo-depok.png" alt="" width="30"
                        class="d-inline-block align-text-top" style="object-fit: cover;">
                </a>
                <h4 class="m-0 pe-5" style="display: none">Anjungan Wisata Depok</h4>
            </div>
            <div class="col-md-12 bg-light h-75 p-0 d-flex align-items-center" style="--bs-bg-opacity: .5;">
                @if (count($rss) > 0)
                <marquee class="d-flex" behavior="scroll" direction="Left">
                    @for ($i = 0; $i < 3; $i++) 
                    <a class="link-dark text-decoration-none d-inline-flex align-items-center me-5" target="_blank"
                        href="{{ $rss[$i]['link'] }}"><span class="badge text-bg-light m-0 me-2">Berita
                            {{ $i+1 }}</span>{{ $rss[$i]['title'] }}</a>
                    @endfor
                </marquee>
                @endif
            </div>
        </div>
    </nav>
    <!-- ========================================================= /NAVBAR ========================================================= -->

    <div class="container" style="padding-block: 65px;">
        <div class="card h-100 mb-3">
            <div class="card-header">
                <a class="btn btn-outline-secondary" href="/{{ $urlBack }}" role="button">Liat {{ $title }}
                    lainnya..</a>
            </div>
            @if (count($foto))
            <img src="{{asset("storage/".$foto[0]->filename)}}" class="img-fluid rounded" alt="..." style="height: 360px; object-fit: cover;">
            @endif
            <div class="card-body">
                <div class="h3 mb-3">{{ $data->first()->judul }}</div>
                {!! $data[0]->body !!}
            </div>
        </div>
        @if (count($koleksis))
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div>
                            <h6 class="card-subtitle text-muted">{{ $title }}</h6>
                        </div>
                    </div>
                    @if (count($koleksis))
                        @if ($koleksiFoto)
                            @foreach ($koleksiFoto as $item)
                            <hr>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item->nama }}</h6>
                            <div id="carouselExampleIndicators{{ $item->id }}" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    @for ($i = 0; $i < count($item->foto); $i++)
                                        <button type="button" data-bs-target="#carouselExampleIndicators{{ $item->id }}"
                                            data-bs-slide-to="{{ $i }}" @if ($i==0) class="active" @endif" aria-current="true"
                                            aria-label="Slide {{ $i+1 }}"></button>
                                        @endfor
                                </div>
                                <div class="carousel-inner rounded gallery" style="background: rgba(0, 0, 0, 0.25);">
                                    @for ($i = 0; $i < count($item->foto); $i++)
                                        <div class="carousel-item @if ($i == 0) active @endif">
                                            <a href="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100"><img
                                                    src="{{ asset('storage/'. $item->foto[$i]->filename) }}" class="d-block w-100"
                                                    alt="..." style="height: 250px; object-fit: scale-down;"></a>
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
                                        <a href="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100"><video src="{{ asset('storage/'. $item->video[$i]->filename) }}" class="d-block w-100" alt="..." style="height: 250px;margin: auto; object-fit: scale-down;" controls></a>
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
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Berita Terkait</h3>
            </div>
            <div class="card-body berita-terkait" style="display: flex; overflow: auto; gap: 1rem;">

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

                <!-- ========================================================= Berita Terkait ========================================================= -->
                <div class="card bg-light" style="width: 23rem; flex-shrink: 0;">
                    <img src="/images/aaa.png" class="card-img-top" style="object-fit: cover; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Berita Lorem ipsum</h5>
                        <a href="#" class="text-decoration-none text-dark"><strong>read more..</strong></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================================================= MENU ========================================================= -->
    <nav class="navbar fixed-bottom bg-light bg-gradient shadow">
        <div class="accordion m-auto w-100" id="accordionExample">
            <div class="row">
                <div class="col-2 p-0">
                    <a class="d-flex flex-column align-items-center text-decoration-none" href="/home">
                        <img src="/icon/home-screen/rumah.svg" width="24">
                        <span class="text-dark">Home</span>
                    </a>
                </div>
                <div class="col-2 p-0">
                    <a class="d-flex flex-column align-items-center text-decoration-none" href="/hotel">
                        <img src="/icon/home-screen/hotel.svg" width="24">
                        <span class="text-dark">Hotel</span>
                    </a>
                </div>
                <div class="col-2 p-0">
                    <div class="d-flex flex-column align-items-center collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <img src="/icon/home-screen/destinasi.svg" width="24">
                        <span class="text-dark">Destinasi</span>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex flex-column align-items-center" style="gap: 2rem;">
                            <a href="/wisata-alam" class="text-decoration-none text-dark">Wisata Alam</a>
                            <a href="/wisata-buatan" class="text-decoration-none text-dark">Wisata Buatan</a>
                            <a href="/wisata-budaya" class="text-decoration-none text-dark">Wisata Budaya</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 p-0">
                    <div class="d-flex flex-column align-items-center collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="/icon/home-screen/makanan.svg" width="24">
                        <span class="text-dark">Makanan</span>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex flex-column align-items-center" style="gap: 2rem;">
                            <a href="/resto" class="text-decoration-none text-dark">Restoran</a>
                            <a href="/kafe" class="text-decoration-none text-dark">Kafe</a>
                            <a href="/kuliner" class="text-decoration-none text-dark">Kuliner</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 p-0">
                    <a class="d-flex flex-column align-items-center text-decoration-none" href="/travel">
                        <img src="/icon/home-screen/travel.svg" width="24">
                        <span class="text-dark">Travel</span>
                    </a>
                </div>
                <div class="col-2 p-0">
                    <a class="d-flex flex-column align-items-center text-decoration-none" href="/oleh-oleh">
                        <img src="/icon/home-screen/oleh-oleh.svg" width="24">
                        <span class="text-dark">Oleh-Oleh</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========================================================= /MENU ========================================================= -->

    <!-- ========================================================= SCRIPT ========================================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.js"
        integrity="sha512-cpMx2tMC8g9QilwXFVFqVT5TWkvfq/xEaOspfF1FUUUJy5mL6As50+uh3yOoVlu1bKwsJrUthuEzC1m6WquRKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
    </script>
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
    <!-- ========================================================= /SCRIPT ========================================================= -->
</body>

</html>
