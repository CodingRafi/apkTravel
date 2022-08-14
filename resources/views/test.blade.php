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
    <!-- ========================================================= /NAVBAR ========================================================= -->

    <div class="container" style="padding-block: 65px;">
        <div class="row g-2">
            <div class="col-md-3">
                <div class="card border-0 shadow h-100">
                    <div class="card-header text-center">
                        <a href="/" class="text-dark">klik untuk video fullscreen</a>
                    </div>
                    <div class="card-body text-center d-flex flex-column align-items-center justify-content-end"
                        style="background-image: url(/images/home-screen/background-cuaca.jpg), linear-gradient(rgba(178, 205, 228, 1),rgba(255, 255, 255, 1)); background-size: cover; background-position: center; background-blend-mode: overlay;">
                        <?php
                        $city_name = 'Depok';
                        $api_key = 'baf203be46efb79bfadbcd96c9e58ecd';
                        $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
                        $weather_data = json_decode( file_get_contents($api_url), true);
                        $temperature = $weather_data['main']['temp'];
                        $temperature_in_celc = $temperature - 273.15;
                        $temperature_c_w_icon = $weather_data['weather'][0]['icon'];
                        echo "<img src='http://openweathermap.org/img/wn/".$temperature_c_w_icon."@2x.png' style='width: 100px' />";
                        echo "<div>";
                        echo "<h3 id='jam'></h3>";
                        echo "<h2>";
                        echo round ($temperature_in_celc).'°C';
                        echo "</h2>";
                        echo "</div>";
                        ?>
                        <h3 id="date"></h3>
                        <p class="timertext mt-4 text-success">Tidak Interaksi Selama <span id="idle"
                                class="secs"></span> Detik</p>
                    </div>
                    <div class="card-footer text-center">
                        <small> tidak interaksi layar selama 1 menit akan berpindah ke tampilan video</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-light bg-grandient border border-5 shadow">
                    <img src="/images/home-screen/depok-map-select.jpg" class="card-img-top map" id="gambarPeta"
                        usemap="#image-map">
                    <map id="peta-depok" name="image-map" class="map" style="overflow: hidden;">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal1"><area data-key="tapos"
                                alt="tapos"
                                coords="873,884,858,841,858,799,851,781,855,767,868,756,872,736,876,721,879,686,890,649,902,627,909,598,903,571,917,554,924,550,938,552,945,548,953,550,960,541,973,538,973,526,979,519,970,510,974,500,979,498,975,486,986,486,998,481,1001,476,1009,477,1011,469,1062,478,1095,496,1110,498,1129,491,1146,495,1149,503,1152,514,1147,520,1137,526,1122,529,1113,540,1122,549,1135,543,1157,529,1173,530,1207,534,1218,533,1234,535,1229,548,1221,562,1218,573,1218,590,1216,605,1223,611,1210,648,1201,630,1192,640,1175,626,1172,644,1146,670,1130,670,1120,710,1094,704,1097,720,1081,714,1081,728,1068,746,1079,750,1074,760,1058,760,1055,778,1045,774,1045,787,1051,794,1053,808,1040,803,1037,812,1042,822,1029,839,1024,858,1023,886,996,897,979,882,945,885,907,882"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal2"><area target="" data-key="cilodong"
                                alt="cilodong"
                                coords="854,766,820,773,806,769,797,781,796,794,804,805,813,809,804,832,777,845,761,851,751,846,746,854,753,862,752,873,735,865,735,873,723,879,712,878,702,907,695,911,687,910,696,880,690,873,683,876,671,871,667,859,677,840,685,831,682,817,666,811,646,818,630,815,618,811,631,803,625,795,630,784,625,775,632,767,620,755,639,742,647,737,630,735,633,719,642,713,650,719,653,727,659,718,652,706,656,694,674,688,728,694,737,688,746,694,777,694,788,697,801,697,810,694,810,678,813,667,813,653,825,629,836,612,841,589,838,581,843,570,852,565,855,553,864,551,871,542,879,530,889,540,897,554,903,569,910,597,903,624,889,647,879,683,875,720,868,756"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal3"><area target="6" data-key="cipayung"
                                alt="cipayung"
                                coords="619,810,595,811,578,807,560,859,533,857,510,858,515,836,515,800,504,801,498,793,483,794,482,782,482,770,487,767,489,758,497,753,483,733,482,718,485,714,486,699,476,694,471,673,465,656,469,645,561,642,603,634,607,639,626,636,653,636,655,646,667,656,668,664,656,664,656,673,667,681,674,683,674,688,654,694,652,706,659,718,652,726,646,716,642,712,634,718,630,734,647,738,619,755,632,767,624,775,630,784,625,794,630,804"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal4"><area target="9" data-key="sawangan"
                                alt="sawangan"
                                coords="382,310,372,346,382,349,375,367,375,389,357,400,354,409,341,398,333,422,356,425,357,435,351,444,340,435,341,454,333,461,335,469,363,478,354,490,359,500,350,504,356,517,352,523,362,535,375,525,388,537,405,550,413,565,419,566,427,582,432,587,439,599,454,610,462,621,453,622,458,647,463,642,469,644,464,656,471,675,477,694,485,699,486,713,482,715,483,734,497,750,489,758,485,767,482,770,482,781,449,787,409,778,383,782,359,778,356,774,349,778,340,777,313,783,281,784,281,763,276,758,291,739,278,732,236,727,239,713,245,714,249,679,257,677,253,671,260,647,255,644,255,623,248,615,248,586,257,570,263,571,264,545,264,517,272,506,272,490,270,476,257,475,256,461,243,458,238,432,234,390,242,347,250,336,272,329,280,334,316,334,319,320,334,312,356,310"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal5"><area target="2" data-key="bojongsari"
                                alt="bojongsari"
                                coords="279,783,281,763,276,758,292,739,279,733,237,728,239,714,243,714,250,679,258,677,253,671,260,647,255,645,255,622,248,615,248,586,256,571,262,571,264,517,273,506,273,489,270,476,257,475,256,462,243,457,237,432,234,390,242,346,250,337,255,336,234,333,209,333,165,331,127,331,92,333,95,345,92,354,76,353,71,360,78,369,72,386,79,395,82,394,90,402,92,407,103,410,95,423,108,423,111,425,100,444,108,451,100,479,114,485,123,475,135,479,124,490,138,493,138,500,130,499,130,514,130,527,127,538,138,536,143,539,139,545,139,552,152,555,145,560,145,572,153,572,160,592,151,617,149,643,163,644,187,668,187,673,178,677,179,695,186,695,177,709,163,715,168,728,180,743,179,756,185,761,194,785,236,783,255,778"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal6"><area target="10" data-key="sukmajaya"
                                alt="sukmajaya"
                                coords="925,551,922,523,938,483,935,463,933,436,915,424,909,400,893,403,891,395,882,403,874,405,854,399,790,402,787,411,787,420,779,420,767,422,767,426,776,431,774,439,774,447,769,453,765,446,762,446,754,457,732,459,732,466,737,470,733,482,742,488,744,494,739,499,737,509,730,515,723,502,719,505,719,515,718,523,725,527,734,530,735,532,726,535,717,535,718,540,726,545,747,545,748,591,709,589,705,591,701,587,696,587,688,594,678,598,664,596,661,602,664,607,659,619,654,636,656,647,667,656,668,664,655,664,657,673,667,681,674,683,675,688,728,694,737,688,747,694,777,694,788,697,802,695,809,694,810,679,811,669,812,654,836,612,841,591,838,581,843,568,852,564,854,553,864,550,879,530,890,542,905,568,916,555"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal7"><area target="8" data-key="pancoranmas"
                                alt="pancoranmas"
                                coords="739,498,667,498,662,502,646,502,645,495,623,497,614,495,599,496,581,489,578,501,567,502,562,496,565,492,564,488,560,487,558,484,561,480,561,473,554,464,538,466,501,466,468,468,451,474,423,473,402,476,364,478,354,491,359,501,350,505,358,517,352,523,361,534,375,525,406,551,413,565,419,566,427,582,432,586,439,598,455,611,463,622,453,623,457,646,463,641,470,645,563,641,603,632,607,639,626,636,653,636,659,621,663,608,661,602,664,596,678,598,689,593,695,588,701,587,705,590,710,588,747,589,747,546,726,545,719,540,717,534,728,534,733,532,731,529,718,523,719,515,719,506,723,502,730,515,737,509"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal8"><area target="4" data-key="cimanggis"
                                alt="cimanggis"
                                coords="1208,363,1169,391,1174,406,1170,427,1149,445,1155,472,1146,495,1129,490,1108,499,1094,495,1063,478,1010,469,1009,475,1001,476,997,480,987,486,974,485,979,499,973,500,971,509,979,520,973,526,973,537,960,540,953,550,944,547,936,553,925,550,923,523,939,485,933,436,916,424,910,399,893,403,891,395,883,402,873,405,854,399,782,402,774,393,762,385,786,376,772,365,776,352,763,344,774,327,754,322,752,310,766,303,756,297,753,283,775,282,769,271,766,256,775,245,772,232,755,240,767,221,791,224,811,226,825,200,844,194,848,208,838,216,858,232,866,240,875,257,871,283,894,292,905,311,956,289,974,308,961,327,988,337,1002,335,1000,346,1029,360,1029,384,1053,385,1065,372,1096,392,1112,382,1130,385,1139,365,1160,334"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal9"><area target="1" data-key="beji" alt="beji"
                                coords="522,465,533,452,533,440,526,428,529,409,525,389,527,385,517,367,520,358,538,357,548,360,569,350,591,349,610,353,613,344,624,338,623,334,633,324,638,309,645,306,668,309,675,304,687,307,705,310,756,297,766,303,752,309,754,321,773,327,762,344,774,352,772,364,786,377,761,385,774,392,782,402,789,402,787,410,787,420,767,422,767,427,776,431,774,448,768,452,765,445,760,447,754,456,732,459,731,466,737,470,733,482,742,489,742,494,738,499,667,499,662,502,646,501,646,494,623,497,614,495,599,495,581,489,578,501,567,501,562,497,564,492,556,484,561,479,561,472,553,464,538,465"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal10"><area target="7" data-key="limo" alt="limo"
                                coords="505,263,515,278,508,327,520,358,517,367,527,386,525,391,529,412,526,429,533,441,533,452,520,465,500,466,468,468,451,473,421,473,401,477,363,477,336,470,334,461,342,454,340,435,351,444,358,434,356,426,333,421,341,398,354,410,359,400,375,389,376,367,383,350,372,345,384,297,378,288,390,272,400,263,409,261,416,263,418,270,433,274,448,273,456,265,473,268,476,264,484,263,487,254,494,254,496,263"
                                shape="poly"></a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#modal11"><area target="5" data-key="cinere" alt="cinere"
                                coords="506,263,524,247,529,252,543,238,550,215,542,203,547,177,558,176,570,156,574,138,586,122,606,66,588,66,582,71,507,74,496,64,489,77,453,79,449,74,428,81,430,107,420,118,428,122,426,141,415,137,421,149,413,164,402,192,392,203,392,238,402,242,397,252,400,263,407,261,416,263,418,270,432,273,447,273,456,264,471,268,476,264,483,263,487,254,494,254,496,264"
                                shape="poly"></a>
                    </map>
                    <div class="card-body text-center pb-1">
                        <img class="mb-2" src="/images/home-screen/clicking.png" width="30">
                        <h5 class="card-title">Klik peta untuk menampilkan lokasi wisata kecamatan</h5>
                    </div>
                </div>
                <div class="card bg-light bg-grandient border-0 shadow mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <h5 class="card-title">Contact Center</h5>
                                <p class="card-text display-6">{{ $config[0]->contact }}</p>
                            </div>
                            <hr>
                            <div class="col-md-6 text-center">
                                <h5 class="card-title">Alamat</h5>
                                <p class="card-text">{{ $config[0]->alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light bg-grandient border-0 shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title">Wisata Kota Depok</h5>
                        <hr>
                        <div class="overflow-auto" style="height: 580px">
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

    <!-- ========================================================= MODAL ========================================================= -->
    @foreach ($kecamatans as $data)
    <div class="modal fade" id="modal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wisata {{ $data->nama }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab{{ $data->id }}" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab{{ $data->id }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home{{ $data->id }}" type="button" role="tab" aria-controls="v-pills-home{{ $data->id }}"
                                aria-selected="true">Hotel</button>
                            <button class="nav-link" id="v-pills-profile-tab{{ $data->id }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile{{ $data->id }}" type="button" role="tab"
                                aria-controls="v-pills-profile{{ $data->id }}" aria-selected="false">Destinasi</button>
                            <button class="nav-link" id="v-pills-disabled-tab{{ $data->id }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled{{ $data->id }}" type="button" role="tab"
                                aria-controls="v-pills-disabled{{ $data->id }}" aria-selected="false">Makanan</button>
                            <button class="nav-link" id="v-pills-messages-tab{{ $data->id }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages{{ $data->id }}" type="button" role="tab"
                                aria-controls="v-pills-messages{{ $data->id }}" aria-selected="false">Travel</button>
                            <button class="nav-link" id="v-pills-settings-tab{{ $data->id }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings{{ $data->id }}" type="button" role="tab"
                                aria-controls="v-pills-settings{{ $data->id }}" aria-selected="false">Oleh-Oleh</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent{{ $data->id }}">
                            <div class="tab-pane fade show active" id="v-pills-home{{ $data->id }}" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="row">
                                    @for ($i = 0; $i < count($hotel[$data->slug]) ; $i++)
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $hotel[$data->slug][$i]->nama }}</h5>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile{{ $data->id }}" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-disabled{{ $data->id }}" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages{{ $data->id }}" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings{{ $data->id }}" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text
                                                            below as a natural lead-in to additional content. This
                                                            content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3
                                                                mins ago</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- ========================================================= /MODAL ========================================================= -->

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
e
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


        /*** 4.0 - LoadMore ***/
        const loadMore = document.querySelector('.loadMore');
        const bungcon12 = document.querySelector('.bungcon12');
        let jumlah = 10;
        loadMore.addEventListener('click', function(){
            let penjumlahan = parseInt(jumlah)+10;
            jumlah = penjumlahan;
            fetch('load-more?jumlah='+ penjumlahan)
            .then(response => response.json())
            .then(data => {
                bungcon12.innerHTML = '';
                data['fotos'].forEach((e,i) => {
                    if(e.length > 0){
                        bungcon12.innerHTML += `
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <a class="fw-bold d-block text-decoration-none text-dark" href="show/${data['wisatas'][i]['slug']}">${data['wisatas'][i]['nama']}</a>
                                ${data['wisatas']['jenis']}
                            </div>
                            <span class="badge @if($i==0) bg-warning @elseif ($i == 1) bg-secondary @else bg-success @endif rounded-pill">${i+1}</span>
                        </li>
                        `;
                    }else{
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
    <!-- ========================================================= /SCRIPT ========================================================= -->
</body>

</html>
