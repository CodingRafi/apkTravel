@extends('dashboard.layouts.main1')

@section('container')

{{-- @dd($kecamatan[0]->nama) --}}
{{-- @dd($koleksis) --}}
{{-- @dd($fotos[0]['fotoAda'][0]->filename)   --}}
{{-- @dd($fotos) --}}

<style>
    strong{
        font-weight: 700
    }
</style>

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">

                    <!-- Project statustic start -->
                    <div class="col-xl-12">
                        <div class="card proj-progress-card">
                            <div class="card-block">
                              
                                <div class="container-fluid">
                                    <div class="row">
                                        @isset($profilWisata->logo)  
                                        <div class="container6">
                                            <img src="{{ asset('storage/' . $profilWisata->logo) }}" style="width: 25px;">
                                        </div>
                                        @endisset
                                        <div class="container7">
                                            <h4 style="font-size: 20px;">{{ $profilWisata->nama }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" style="margin: 0;">
                                    <div class="row">
                                        <div class="bungkus1" style="width: 3%;">
                                            <svg style="width: 20px;" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            stroke="none">
                                            <path d="M2435 5114 c-16 -2 -68 -9 -115 -15 -561 -75 -1080 -487 -1290 -1026
                                            -84 -214 -114 -375 -114 -618 -1 -244 40 -440 135 -656 51 -116 51 -117 378
                                            -629 149 -233 267 -427 263 -431 -4 -4 -52 -14 -107 -24 -369 -65 -748 -198
                                            -965 -341 -219 -143 -335 -350 -303 -539 34 -197 194 -370 468 -504 714 -351
                                            2020 -434 3003 -191 426 105 760 273 904 453 195 246 140 533 -143 746 -205
                                            155 -612 306 -1014 376 -55 10 -103 20 -107 24 -4 4 123 211 283 461 160 250
                                            310 496 334 545 60 126 101 247 132 394 23 110 27 150 27 306 0 99 -6 216 -13
                                            260 -112 713 -656 1268 -1361 1390 -84 15 -338 27 -395 19z m392 -323 c512
                                            -105 913 -493 1042 -1006 77 -310 38 -656 -106 -932 -47 -89 -1193 -1893
                                            -1203 -1893 -3 0 -219 336 -480 747 -261 410 -526 825 -588 922 -62 97 -129
                                            210 -149 251 -276 578 -105 1278 406 1664 198 149 420 237 681 270 79 10 298
                                            -3 397 -23z m-662 -3776 c203 -317 290 -446 314 -462 46 -31 116 -31 162 0 24
                                            16 112 145 314 462 l281 440 39 -3 c22 -1 94 -12 160 -23 468 -79 818 -213
                                            986 -379 117 -116 117 -186 1 -300 -218 -212 -717 -366 -1397 -432 -171 -16
                                            -771 -16 -935 0 -365 37 -639 89 -885 168 -238 76 -401 161 -507 264 -109 106
                                            -114 177 -20 281 134 149 451 287 848 368 164 34 321 60 344 57 8 0 141 -199
                                            295 -441z"/>
                                            <path d="M2465 4204 c-11 -2 -45 -9 -75 -15 -217 -44 -429 -224 -522 -444 -41
                                            -97 -53 -162 -53 -285 0 -123 12 -188 53 -285 93 -219 290 -387 522 -446 71
                                            -18 269 -18 340 0 232 59 429 227 522 446 41 97 53 162 53 285 0 65 -6 139
                                            -14 170 -68 269 -277 482 -546 557 -51 14 -243 26 -280 17z m176 -304 c235
                                            -45 399 -275 361 -506 -32 -196 -180 -344 -376 -376 -289 -48 -556 219 -508
                                            508 42 252 277 420 523 374z"/>
                                            </g>
                                            </svg>

                                        </div>
                                        <div class="bungkus2" style="width: 97%;">
                                            {!! $profilWisata->alamat !!}
                                        </div>
                                    </div>
                                </div>
                                
                                @if (count($foto) > 0)
                                <div style="max-height: 350px;overflow: hidden;" class="showImageProfilWisata">
                                    <img src="{{ asset('storage/' . $foto[0]->filename) }}" class="card-img-top img-fluid mt-3">
                                </div>                                 
                                @elseif(count($video) > 0)
                                    <video width="400" controls autoplay>
                                        <source class="video-preview img-fluid col-sm-5" src="{{ asset('storage/' . $video[0]->filename) }}" type="video/{{ explode('.', explode('/', $video[0]->filename)[1])[1] }}">
                                    </video>
                                @endif

                                @if (count($koleksis) > 0)
                                    <h5 class="mt-3">Koleksi</h5>
                                    <div class="bungkusContainer2" style="width: 100%;height: 13rem;">
                                        <div class="bungkusContainer3" style="position: absolute;width: 95%; overflow: auto;height: 35vh;">
                                            <div class="bungkusContainer" style="display: flex;position: absolute">
                                                @for ($i = 0; $i < count($koleksis); $i++)
                                                <div class="card" style="width: 180px;margin: 0 10px;">
                                                    @isset($fotos[$i]['fotoAda'])
                                                        <div class="hiden" style="height: 90px;overflow: hidden;">
                                                            <img src="{{ asset('storage/'.$fotos[$i]['fotoAda'][0]->filename) }}" class="card-img-top" style="overflow: hidden;">
                                                        </div>
                                                    @endisset
                                                        
                                                    @isset($fotos[$i]['fotoGada'])
                                                        <div class="hiden" style="height: 90px;overflow: hidden;">
                                                            <img src="{{ $fotos[$i]['fotoGada']}}" class="card-img-top" >
                                                        </div>
                                                    @endisset
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">{{ $koleksis[$i]->nama }}</h5>
                                                        <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">Total : 
                                                        @isset($fotos[$i]['fotoAda'])
                                                            <span>{{ count($fotos[$i]['fotoAda']) }}</span>
                                                        @endisset
                                                            
                                                        @isset($fotos[$i]['fotoGada'])
                                                            <span>0</span>
                                                        @endisset
                                                        </h5>
                                                        <a href="/dashboard/koleksi/{{ $koleksis[$i]->slug }}" class="card-subtitle mb-2 text-muted">Lihat Selengkapnya</a>
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <span class="d-block mt-4"><strong style="font-weight: 700">Kecamatan : </strong>{{ $kecamatan[0]->nama }}</span>

                                <h5 class="mt-3">Deskripsi</h5>
                                {!! $profilWisata->deskripsi !!}

                                <h5 class="mt-4">Pengelola</h5>
                                {!! $profilWisata->pengelola !!}

                                <span class="d-block mt-4"><strong style="font-weight: 700">No telepon yang dapat dihubungi :</strong> {!! $profilWisata->no_telp !!}</span>

                                @if (isset($profilWisata->whatsapp) || isset($profilWisata->facebook) || isset($profilWisata->instagram) || isset($profilWisata->twitter) || isset($profilWisata->youtube) || isset($profilWisata->website))
                                <h5 class="mt-4">Sosial Media</h5>
                                
                                @endif
                                @isset($profilWisata->whatsapp)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Whatsapp : </strong> {!! $profilWisata->whatsapp !!}</span>
                                @endisset
                                @isset($profilWisata->facebook)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Facebook : </strong> {!! $profilWisata->facebook !!}</span>
                                @endisset
                                @isset($profilWisata->instagram)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Instagram : </strong> {!! $profilWisata->instagram !!}</span>
                                @endisset
                                @isset($profilWisata->twitter)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Twitter : </strong> {!! $profilWisata->twitter !!}</span>
                                @endisset
                                @isset($profilWisata->youtube)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Youtube : </strong> {!! $profilWisata->youtube !!}</span>
                                @endisset
                                @isset($profilWisata->website)
                                <span class="d-block mt-3"><strong style="font-weight: 700">Website : </strong> {!! $profilWisata->website !!}</span>
                                @endisset

                               
                                {{-- <div class="bungksuCOntainer3" style="height: 7rem">
                                </div> --}}

                                <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                    <a href="/dashboard/{{ $urlBack }}" class="btn btn-success">Back to home</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Project statustic end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>

@endsection