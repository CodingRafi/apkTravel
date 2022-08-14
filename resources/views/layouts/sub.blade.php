<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kota Depok</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Nunito';
        }

        body {
            overflow: overlay;
        }

        ::-webkit-scrollbar {
            width: 20px;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #ffffff91;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }

        @media (min-width: 768px) {
            nav .col-md-auto.bg-light.bg-gradient.shadow.position-absolute.d-flex.align-items-center {
                border-radius: 0 0 100px 0 !important;
            }

            nav.navbar.fixed-bottom.bg-light.bg-gradient.shadow {
                border-radius: 30% 30% 0 0 !important;
            }

            nav .accordion {
                width: 75% !important;
            }

        }
    </style>
</head>

<body style="min-height: 100vh; background-image: url(/images/home-screen/background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
    {{-- Navbar --}}
    {{-- @include('partials.topbar') --}}
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
                <marquee class="d-flex" behavior="scroll" direction="Left">
                    @for ($i = 0; $i < 3; $i++)
                    <a class="link-light text-decoration-none d-inline-flex align-items-center me-5" target="_blank"
                        href="{{ $rss[$i]['link'] }}"><span class="badge text-bg-light m-0 me-2">Berita {{ $i+1 }}</span>{{ $rss[$i]['title'] }}</a>
                    @endfor
                </marquee>
            </div>
        </div>
    </nav>
    {{-- /Navbar --}}

    {{-- Konten --}}
    <div class="container" style="padding-block: 65px;">
        <div class="row g-2">
            {{-- kolum sub --}}
            {{-- @include('partials.subColumn') --}}
            <div class="col-md-9">
                <div class="card border-0 shadow h-100" >
                    <h1 style="width: 100%;background: none;box-shadow: none;margin-top: 10px;margin-left: 20px;">{{ $namaHal }}
                    </h1>
                    
                    <div class="card-body">
                        <div class="overflow-auto" style="height: 520px;">
                            <div class="row g-2" >
                                @if (count($datas) > 0)
                                    @for ($i = 0; $i < count($datas); $i++)
                                    <div class="col-md-6">
                                        <div class="card">
                                            @if ($fotoData[$i] == 'images/jika.jpg')
                                                <img src="{{ $fotoData[$i] }}" class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                            @else
                                                <img src="{{ asset('storage/'. $fotoData[$i]->filename ) }}" class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                            @endif
                                            <div class="card-body">
                                                <a href="/show/{{ $datas[$i]->slug }}" style="text-decoration: none;color:black;">
                                                    <h5 class="card-title">{!! $datas[$i]->nama !!}</h5>
                                                    <p class="card-text">{!! $datas[$i]->alamat !!}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /kolum sub --}}

            {{-- kolum kanan --}}
            {{-- @include('partials.rightColumn') --}}
            <div class="col-md-3">
                <div class="card bg-light bg-grandient border-0 shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Wisata Kota Depok</h5>
                        <hr>
                        <div class="overflow-auto" style="height: 480px">
                            @if(count($wisatas) <= 10)
                                <ol class="list-group list-group bungcon12">
                                    @for($i = 0; $i < count($wisatas); $i++)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <a class="fw-bold d-block text-decoration-none text-dark" href="show/{{ $wisatas[$i]->slug }}">{{ $wisatas[$i]->nama }}</a>
                                            {{ $wisatas[$i]->jenis }}
                                        </div>
                                        <span class="badge text-dark @if($i==0) bg-warning @elseif ($i == 1) bg-secondary @else bg-light @endif rounded-pill">{{ $i+1 }}</span>
                                    </li>
                                    @endfor
                                </ol>
                            @else
                                <ol class="list-group list-group bungcon12">
                                    @for($i = 0; $i < $jumlah; $i++)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <a class="fw-bold d-block text-decoration-none text-dark" href="show/{{ $wisatas[$i]->slug }}">{{ $wisatas[$i]->nama }}</a>
                                            {{ $wisatas[$i]->jenis }}
                                        </div>
                                        <span class="badge text-dark @if($i==0) bg-warning @elseif ($i == 1) bg-secondary bg-opacity-50 @else bg-light @endif rounded-pill">{{ $i+1 }}</span>
                                    </li>
                                    @endfor
                                </ol>
                            @endif
                        </div>

                        <button class="btn btn-primary w-100 mt-2 loadMore" type="button">lainnya</button>
                    </div>
                </div>
            </div>
            {{-- /kolum kanan --}}
        </div>
    </div>
    {{-- /Konten --}}

    {{-- Menu --}}
    {{-- @include('partials.menu') --}}
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
    {{-- /Menu --}}

    {{-- SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.js"
        integrity="sha512-cpMx2tMC8g9QilwXFVFqVT5TWkvfq/xEaOspfF1FUUUJy5mL6As50+uh3yOoVlu1bKwsJrUthuEzC1m6WquRKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        /*** 4.0 - LoadMore ***/
        const loadMore = document.querySelector('.loadMore');
        const bungcon12 = document.querySelector('.bungcon12');
        let jumlah = 10;
        loadMore.addEventListener('click', function () {
            let penjumlahan = parseInt(jumlah) + 10;
            jumlah = penjumlahan;
            fetch('load-more?jumlah=' + penjumlahan)
                .then(response => response.json())
                .then(data => {
                    bungcon12.innerHTML = '';
                    data['fotos'].forEach((e, i) => {
                        if (e.length > 0) {
                            bungcon12.innerHTML += `
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <a class="fw-bold d-block text-decoration-none text-dark" href="show/${data['wisatas'][i]['slug']}">${data['wisatas'][i]['nama']}</a>
                                ${data['wisatas']['jenis']}
                            </div>
                            <span class="badge @if($i==0) bg-warning @elseif ($i == 1) bg-secondary @else bg-success @endif rounded-pill">${i+1}</span>
                        </li>
                        `;
                        } else {
                            bungcon12.innerHTML += `
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <a class="fw-bold d-block text-decoration-none text-dark" href="show/${data['wisatas'][i]['slug']}">${data['wisatas'][i]['nama']}</a>
                                ${data['wisatas']['jenis']}
                            </div>
                            <span class="badge @if($i==0) bg-warning @elseif ($i == 1) bg-secondary @else bg-success @endif rounded-pill">${i+1}</span>
                        </li>
                        `;
                        }
                    });
                })
        })
    </script>
    {{-- /SCRIPT --}}
</body>

</html>