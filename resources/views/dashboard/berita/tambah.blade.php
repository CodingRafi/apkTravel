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
                                <form action="/dashboard/berita" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Berita" name="judul" id="judul" required autofocus value="{{ old('judul') }}">
                                            @error('judul')   
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slug Berita</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug Berita" name="slug" id="slug" required value="{{ old('slug') }}">
                                            @error('slug')   
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori Berita</label>
                                        <div class="col-sm-10">
                                            <select name="category_id" class="form-control">
                                                <option value="11" {{ (old('kategory') === '11') ? 'selected' : '' }}>Berita Pembangunan</option>
                                                <option value="12" {{ (old('kategory') === '12') ? 'selected' : '' }}>Berita Ekonomi</option>
                                                <option value="13" {{ (old('kategory') === '13') ? 'selected' : '' }}>Berita Kesos</option>
                                                <option value="14" {{ (old('kategory') === '14') ? 'selected' : '' }}>Berita Pemerintahan</option>
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
                                        <label class="col-sm-2 col-form-label" for="body">Content Berita</label>
                                        <div class="col-sm-10">
                                            @error('body')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Content Berita" id="body" style="width: 100%" name="body"></textarea>
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

    // CKEDITOR.replace( 'body' );

</script>

@endsection