@extends('dashboard.layouts.main1')

@section('container')
    
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tambah Hotel</h5>
                                </div>
                                <div class="card-block">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="nama">Nama Hotel</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Nama Hotel" name="nama" id="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="no_telp">No Telpon Hotel</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="No Telpon Hotel" name="no_telp" id="no_telp">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat Hotel</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Alamat Hotel" name="alamat" id="alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Fasilitas Hotel</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Fasilitas Hotel" name="fasilitas" id="fasilitas"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi Hotel</label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsi Hotel" name="deskripsi" id="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto / Video</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="media" id="media">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>

@endsection