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



@endsection