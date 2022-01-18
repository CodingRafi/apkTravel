@extends('dashboard.layouts.main1')

@section('container')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $title }}</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option" >
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">

                        <div class="contai" style="position: absolute;width: 97%;display: flex;justify-content: end;">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                  
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <h5>Data Konfigurasi</h5>
                        <p class="mt-4"><strong style="font-weight: 700;">Contact Center : </strong>{{ $data[0]->isi }}</p>
                        <p><strong style="font-weight: 700;">Alamat : </strong>{{ $data[1]->isi }}</p>
                        

                        <h5 class="mt-4">Koleksi Sambutan</h5>
                        {{-- <div class="bungkusContainer2" style="width: 100%;height: 13rem;">
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
                        </div> --}}

                    </div>
                </div>
                <!-- Basic table card end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>
    

@endsection