@extends('dashboard.layouts.main1')

@section('container')
    
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                @if (session()->has('success'))   
                    <div class="container-fluid p-0">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <!-- order-visitor start -->


                    <!-- order-visitor end -->

                    <!--  sale analytics start -->
                    <div class="col-xl-6 col-md-12">
                        <div class="row">
                            <!-- sale card start -->
                            <a href="/dashboard/{{ $categories[7]->slug }}" class="col-md-6">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Hotel</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $hotel }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[0]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Wisata Alam</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $wisataAlam }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[3]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Resto</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $resto }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[4]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Kuliner</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $kuliner }}</h4>
                                    </div>
                                </div>
                            </a>
                            <!-- sale card end -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="row">
                            <!-- sale card start -->
                            <a class="col-md-6" href="/dashboard/{{ $categories[1]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Wisata Buatan</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $wisataBuatan }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[2]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Wisata Budaya</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $wisataBudaya }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[5]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Kafe</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $kafe }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[8]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Travel</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $travel }}</h4>
                                    </div>
                                </div>
                            </a>
                            <!-- sale card end -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="row">
                            <!-- sale card start -->
                            <a class="col-md-6" href="/dashboard/{{ $categories[6]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Oleh Oleh</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $olehOleh }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[9]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Berita Pembangunan</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $beritaPembangunan }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[12]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Berita Pemerintahan</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $beritaPemerintahan }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/foto">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Foto</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $foto }}</h4>
                                    </div>
                                </div>
                            </a>
                            <!-- sale card end -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="row">
                            <!-- sale card start -->
                            <a class="col-md-6" href="/dashboard/{{ $categories[10]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Berita Ekonomi</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $beritaEkonomi }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/{{ $categories[11]->slug }}">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Berita Kesos</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $beritaKesos }}</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="col-md-6" href="/dashboard/video">
                                <div class="card text-center order-visitor-card">
                                    <div class="card-block card-dashboard">
                                        <h6 class="m-b-0">Video</h6>
                                        <h4 class="m-t-15 m-b-15">{{ $video }}</h4>
                                    </div>
                                </div>
                            </a>
                            <!-- sale card end -->
                        </div>
                    </div>

                    <!--  sale analytics end -->

                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>



@endsection