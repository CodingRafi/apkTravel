@extends('dashboard.layouts.main1')

@section('container')
    
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
                                <h5>Tambah Berita</h5>
                            </div>
                            <div class="card-block">
                                <form method="POST" action="/dashboard/berita" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Judul Berita" name="judul" id="judul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slug Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Slug Berita" name="slug" id="slug">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori Berita</label>
                                        <div class="col-sm-10">
                                            <select name="kategory" class="form-control">
                                                <option value="11">Berita Pembangunan</option>
                                                <option value="12">Berita Ekonomi</option>
                                                <option value="13">Berita Kesos</option>
                                                <option value="14">Berita Pemerintahan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto Berita</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="foto" id="foto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Content Berita</label>
                                        <div class="col-sm-10">
                                            <input id="body" type="hidden" name="body">
                                            <trix-editor input="body"></trix-editor>
                                        </div>
                                    </div>
                                    <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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

<script type="text/javascript" src="/js/jquery/jquery.min.js "></script>

<script>
    const judul = document.querySelector("#judul");
    const slug = document.querySelector("#slug");

    judul.addEventListener("change", function(){
        fetch('/dashboard/berita/checkSlug?judul='+judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

</script>

@endsection