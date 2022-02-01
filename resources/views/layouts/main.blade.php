<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.css" integrity="sha512-JP49dvydjvdq6qd31grbdqIeExUyLFFIIneoetY/cJ+eQeJ6ok5HhaM4kQfIeQV4maAMGQ5kf4In3T7VKwMufg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .breaking-caret:after {
        content: "";
        width: 0;
        height: 0;
        border-top: 20px solid transparent;
        border-left: 15px solid #007bff;
        border-bottom: 20px solid transparent;
        position: absolute;
        right: -15px;
        top: 0;
    }
    li {
        list-style:none;
    }
    .tile {
        width: 100%;
        background:#fff;
        border-radius:5px;
        box-shadow:0px 2px 3px -1px rgba(151, 171, 187, 0.7);
        float:left;
        transform-style: preserve-3d;
        margin: 10px 5px;
    }
    </style>
    <title>Kota Depok</title>
</head>

<body>
    {{-- Topbar --}}


    @include('partials.topbar')
    

    {{-- Konten --}}
        <div class="main flex">

            {{-- kolum kiri --}}
            <div class="column flex">

                {{-- sambutan --}}
                <div class="wrapper">
                    <div class="header">Video</div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($videoWelcome as $item)
                            <div class="carousel-item active">
                                <video class="d-block w-100" autoplay muted loop>
                                    <source src="{{ asset("storage/".$item->filename) }}" type="video/mp4">
                                </video>
                            </div>
                            @endforeach
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <div class="footer">
                       <a href="/">[   ] Klik untuk video fullscreen</a>
                    </div>
                </div>

                {{-- cuaca --}}
                <div class="cuaca-frame flex">

                    @yield('cuaca')
                    
                </div>
            </div>

            {{-- kolum tengah --}}
            <div class="column middle flex" style="overflow: hidden;">
                
                {{-- peta --}}
                <div class="peta-frame" >

                    <div class="map-selector"></div>
                    <img id="gambarPeta" src="images/home-screen/depok-map-select.jpg"  class="map" usemap="#image-map">
                    <map id="peta-depok" name="image-map" class="map" style="overflow: hidden;">
                          <a id="menutapos" href="#ex1" rel="modal:open"><area  target="" data-key="tapos" alt="tapos"
                              coords="873,884,858,841,858,799,851,781,855,767,868,756,872,736,876,721,879,686,890,649,902,627,909,598,903,571,917,554,924,550,938,552,945,548,953,550,960,541,973,538,973,526,979,519,970,510,974,500,979,498,975,486,986,486,998,481,1001,476,1009,477,1011,469,1062,478,1095,496,1110,498,1129,491,1146,495,1149,503,1152,514,1147,520,1137,526,1122,529,1113,540,1122,549,1135,543,1157,529,1173,530,1207,534,1218,533,1234,535,1229,548,1221,562,1218,573,1218,590,1216,605,1223,611,1210,648,1201,630,1192,640,1175,626,1172,644,1146,670,1130,670,1120,710,1094,704,1097,720,1081,714,1081,728,1068,746,1079,750,1074,760,1058,760,1055,778,1045,774,1045,787,1051,794,1053,808,1040,803,1037,812,1042,822,1029,839,1024,858,1023,886,996,897,979,882,945,885,907,882"
                              shape="poly"></a>
                          <a id="menucilodong" href="#ex2" rel="modal:open"><area target="" data-key="cilodong" alt="cilodong"
                              coords="854,766,820,773,806,769,797,781,796,794,804,805,813,809,804,832,777,845,761,851,751,846,746,854,753,862,752,873,735,865,735,873,723,879,712,878,702,907,695,911,687,910,696,880,690,873,683,876,671,871,667,859,677,840,685,831,682,817,666,811,646,818,630,815,618,811,631,803,625,795,630,784,625,775,632,767,620,755,639,742,647,737,630,735,633,719,642,713,650,719,653,727,659,718,652,706,656,694,674,688,728,694,737,688,746,694,777,694,788,697,801,697,810,694,810,678,813,667,813,653,825,629,836,612,841,589,838,581,843,570,852,565,855,553,864,551,871,542,879,530,889,540,897,554,903,569,910,597,903,624,889,647,879,683,875,720,868,756"
                              shape="poly"></a>
                          <a id="menucipayung" href="#ex3" rel="modal:open"><area target="6" data-key="cipayung" alt="cipayung"
                              coords="619,810,595,811,578,807,560,859,533,857,510,858,515,836,515,800,504,801,498,793,483,794,482,782,482,770,487,767,489,758,497,753,483,733,482,718,485,714,486,699,476,694,471,673,465,656,469,645,561,642,603,634,607,639,626,636,653,636,655,646,667,656,668,664,656,664,656,673,667,681,674,683,674,688,654,694,652,706,659,718,652,726,646,716,642,712,634,718,630,734,647,738,619,755,632,767,624,775,630,784,625,794,630,804"
                              shape="poly"></a>
                          <a id="menusawangan" href="#ex4" rel="modal:open"><area target="9" data-key="sawangan" alt="sawangan"
                              coords="382,310,372,346,382,349,375,367,375,389,357,400,354,409,341,398,333,422,356,425,357,435,351,444,340,435,341,454,333,461,335,469,363,478,354,490,359,500,350,504,356,517,352,523,362,535,375,525,388,537,405,550,413,565,419,566,427,582,432,587,439,599,454,610,462,621,453,622,458,647,463,642,469,644,464,656,471,675,477,694,485,699,486,713,482,715,483,734,497,750,489,758,485,767,482,770,482,781,449,787,409,778,383,782,359,778,356,774,349,778,340,777,313,783,281,784,281,763,276,758,291,739,278,732,236,727,239,713,245,714,249,679,257,677,253,671,260,647,255,644,255,623,248,615,248,586,257,570,263,571,264,545,264,517,272,506,272,490,270,476,257,475,256,461,243,458,238,432,234,390,242,347,250,336,272,329,280,334,316,334,319,320,334,312,356,310"
                              shape="poly"></a>
                          <a id="menubojongsari" href="#ex5" rel="modal:open"><area target="2" data-key="bojongsari" alt="bojongsari"
                              coords="279,783,281,763,276,758,292,739,279,733,237,728,239,714,243,714,250,679,258,677,253,671,260,647,255,645,255,622,248,615,248,586,256,571,262,571,264,517,273,506,273,489,270,476,257,475,256,462,243,457,237,432,234,390,242,346,250,337,255,336,234,333,209,333,165,331,127,331,92,333,95,345,92,354,76,353,71,360,78,369,72,386,79,395,82,394,90,402,92,407,103,410,95,423,108,423,111,425,100,444,108,451,100,479,114,485,123,475,135,479,124,490,138,493,138,500,130,499,130,514,130,527,127,538,138,536,143,539,139,545,139,552,152,555,145,560,145,572,153,572,160,592,151,617,149,643,163,644,187,668,187,673,178,677,179,695,186,695,177,709,163,715,168,728,180,743,179,756,185,761,194,785,236,783,255,778"
                              shape="poly"></a>
                          <a href="#ex6" id="menusukmajaya" rel="modal:open"><area target="10" data-key="sukmajaya" alt="sukmajaya"
                              coords="925,551,922,523,938,483,935,463,933,436,915,424,909,400,893,403,891,395,882,403,874,405,854,399,790,402,787,411,787,420,779,420,767,422,767,426,776,431,774,439,774,447,769,453,765,446,762,446,754,457,732,459,732,466,737,470,733,482,742,488,744,494,739,499,737,509,730,515,723,502,719,505,719,515,718,523,725,527,734,530,735,532,726,535,717,535,718,540,726,545,747,545,748,591,709,589,705,591,701,587,696,587,688,594,678,598,664,596,661,602,664,607,659,619,654,636,656,647,667,656,668,664,655,664,657,673,667,681,674,683,675,688,728,694,737,688,747,694,777,694,788,697,802,695,809,694,810,679,811,669,812,654,836,612,841,591,838,581,843,568,852,564,854,553,864,550,879,530,890,542,905,568,916,555"
                              shape="poly"></a>
                          <a href="#ex7" id="menupancoranmas" rel="modal:open"><area target="8" data-key="pancoranmas" alt="pancoranmas"
                              coords="739,498,667,498,662,502,646,502,645,495,623,497,614,495,599,496,581,489,578,501,567,502,562,496,565,492,564,488,560,487,558,484,561,480,561,473,554,464,538,466,501,466,468,468,451,474,423,473,402,476,364,478,354,491,359,501,350,505,358,517,352,523,361,534,375,525,406,551,413,565,419,566,427,582,432,586,439,598,455,611,463,622,453,623,457,646,463,641,470,645,563,641,603,632,607,639,626,636,653,636,659,621,663,608,661,602,664,596,678,598,689,593,695,588,701,587,705,590,710,588,747,589,747,546,726,545,719,540,717,534,728,534,733,532,731,529,718,523,719,515,719,506,723,502,730,515,737,509"
                              shape="poly"></a>
                          <a href="#ex8" id="menucimanggis" rel="modal:open"><area target="4" data-key="cimanggis" alt="cimanggis"
                              coords="1208,363,1169,391,1174,406,1170,427,1149,445,1155,472,1146,495,1129,490,1108,499,1094,495,1063,478,1010,469,1009,475,1001,476,997,480,987,486,974,485,979,499,973,500,971,509,979,520,973,526,973,537,960,540,953,550,944,547,936,553,925,550,923,523,939,485,933,436,916,424,910,399,893,403,891,395,883,402,873,405,854,399,782,402,774,393,762,385,786,376,772,365,776,352,763,344,774,327,754,322,752,310,766,303,756,297,753,283,775,282,769,271,766,256,775,245,772,232,755,240,767,221,791,224,811,226,825,200,844,194,848,208,838,216,858,232,866,240,875,257,871,283,894,292,905,311,956,289,974,308,961,327,988,337,1002,335,1000,346,1029,360,1029,384,1053,385,1065,372,1096,392,1112,382,1130,385,1139,365,1160,334"
                              shape="poly"></a>
                          <a href="#ex9" id="menubeji" rel="modal:open"><area target="1" data-key="beji" alt="beji"
                              coords="522,465,533,452,533,440,526,428,529,409,525,389,527,385,517,367,520,358,538,357,548,360,569,350,591,349,610,353,613,344,624,338,623,334,633,324,638,309,645,306,668,309,675,304,687,307,705,310,756,297,766,303,752,309,754,321,773,327,762,344,774,352,772,364,786,377,761,385,774,392,782,402,789,402,787,410,787,420,767,422,767,427,776,431,774,448,768,452,765,445,760,447,754,456,732,459,731,466,737,470,733,482,742,489,742,494,738,499,667,499,662,502,646,501,646,494,623,497,614,495,599,495,581,489,578,501,567,501,562,497,564,492,556,484,561,479,561,472,553,464,538,465"
                              shape="poly"></a>
                          <a href="#ex10" id="menulimo" rel="modal:open"><area target="7" data-key="limo" alt="limo"
                              coords="505,263,515,278,508,327,520,358,517,367,527,386,525,391,529,412,526,429,533,441,533,452,520,465,500,466,468,468,451,473,421,473,401,477,363,477,336,470,334,461,342,454,340,435,351,444,358,434,356,426,333,421,341,398,354,410,359,400,375,389,376,367,383,350,372,345,384,297,378,288,390,272,400,263,409,261,416,263,418,270,433,274,448,273,456,265,473,268,476,264,484,263,487,254,494,254,496,263"
                              shape="poly"></a>
                          <a href="#ex11" id="menucinere" rel="modal:open"><area target="5" data-key="cinere" alt="cinere"
                              coords="506,263,524,247,529,252,543,238,550,215,542,203,547,177,558,176,570,156,574,138,586,122,606,66,588,66,582,71,507,74,496,64,489,77,453,79,449,74,428,81,430,107,420,118,428,122,426,141,415,137,421,149,413,164,402,192,392,203,392,238,402,242,397,252,400,263,407,261,416,263,418,270,432,273,447,273,456,264,471,268,476,264,483,263,487,254,494,254,496,264"
                              shape="poly"></a>
                      </map>
                    <div class="peta-detail">
                        <div>
                            <img src="images/home-screen/clicking.png">
                            <center>
                                <p>Klik peta untuk menampilkan lokasi wisata kecamatan</p>
                            </center>
                        </div>


                        @yield('peta-detail')


                    </div>
                </div>

                {{-- kontak --}}
                <div class="kontak-frame flex">
                    <div class="kontak flex">
                        <h5>Contact Center</h5>
                        <h1>{{ $config[0]->contact }}</h1>
                    </div>
                    <div class="customer flex">
                        <h5>Alamat</h5>
                        <p>{{ $config[0]->alamat }}</p>
                    </div>
                </div>
            </div>

            {{-- kolum kanan --}}


            @include('partials.rightColumn')
        </div>

       
    </div>
    </div>




    {{-- menu --}}

    
    @include('partials.menu')
</div>
</div>


    <script src="js/home-screen.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imageMapResizer.min.js"></script>
    <script type="text/javascript">
        // $('map').imageMapResize();
        // $('#peta-depok').imageMapResize();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.js" integrity="sha512-cpMx2tMC8g9QilwXFVFqVT5TWkvfq/xEaOspfF1FUUUJy5mL6As50+uh3yOoVlu1bKwsJrUthuEzC1m6WquRKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#gambarPeta')
        .mapster({
            areas:[{
                key: 'tapos',
                stroke: true,
                strokeColor:"3320ff",
                fill:true,
                fillColor: 'A7DC96',
            },
                {
                    key: 'cilodong',
                    stroke: true,
                    fillColor: 'ff7f7f',
                    strokeColor: 'ff7f7f',
                    onMouseover: function (evt) {
                        var parts = evt.key.split('-');
                        var part = parts[1];
                        highlightArea(part);
                    },

                },
                {
                    key: 'cipayung',
                    stroke: true,
                    fillColor: 'ddde97',
                    strokeColor: 'ddde97',
                }
            ],
            fill:true,
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
        .mapster('set',true,'tapos,cilodong,cipayung,sawangan,bojongsari,sukmajaya,pancoranmas,cimanggis,beji,limo,cinere');
   
        function pindah(){
            window.setTimeout(function() {
                window.location.href = '/';
            }, 5000);
        }
       
   </script>
   

    <script type="text/javascript">
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
            if(currSeconds == 55){
                pindah();
            }
        }
    </script>

    <script>
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
                        <ul class="list-group">
                            <a href="show/${data['wisatas'][i]['slug']}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div class="flex-column">
                                <span class="badge badge-info badge-pill">${i+1}</span>
                                ${data['wisatas'][i]['nama']}
                            </div>
                            <div class="image-parent">
                                <img src="${'storage/'+e[0].filename}" class="img-fluid" alt="quixote">
                            </div>
                            </a>
                        </ul>
                        `;
                    }else{
                    bungcon12.innerHTML += `
                    <ul class="list-group">
                        <a href="show/${data['wisatas'][i]['slug']}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                            <span class="badge badge-info badge-pill">${i+1}</span>
                            ${data['wisatas'][i]['nama']}
                        </div>
                        <div class="image-parent">
                            <img src="/images/home-screen/berita.jpg" class="img-fluid" alt="quixote">  
                        </div>
                        </a>
                    </ul>
                    `;
                    }
                });
            })
        })
    </script>
</body>

</html>
