@extends('dashboard.layouts.main1')

@section('container')
    
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Welcome to Material Able</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- order-visitor start -->


                        <!-- order-visitor end -->

                        <!--  sale analytics start -->
                        <div class="col-xl-6 col-md-12">
                            <div class="row">
                                <!-- sale card start -->

                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Hotel</h6>
                                            <h4 class="m-t-15 m-b-15">7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Destinasi</h6>
                                            <h4 class="m-t-15 m-b-15">6325</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Oleh oleh</h6>
                                            <h4 class="m-t-15 m-b-15">7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Berita</h6>
                                            <h4 class="m-t-15 m-b-15">6325</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- sale card end -->
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="row">
                                <!-- sale card start -->

                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Makanan</h6>
                                            <h4 class="m-t-15 m-b-15">7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block card-dashboard">
                                            <h6 class="m-b-0">Travel</h6>
                                            <h4 class="m-t-15 m-b-15">6325</h4>
                                        </div>
                                    </div>
                                </div>
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
</div>

@endsection