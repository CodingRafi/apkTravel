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
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Berita" name="judul" id="judul" autofocus value="{{ old('judul') }}">
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
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug Berita" name="slug" id="slug" value="{{ old('slug') }}">
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
                                                <option value="10" {{ (old('kategory') === '10') ? 'selected' : '' }}>Berita Pembangunan</option>
                                                <option value="11" {{ (old('kategory') === '11') ? 'selected' : '' }}>Berita Ekonomi</option>
                                                <option value="12" {{ (old('kategory') === '12') ? 'selected' : '' }}>Berita Kesos</option>
                                                <option value="13" {{ (old('kategory') === '13') ? 'selected' : '' }}>Berita Pemerintahan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto / Video</label>
                                        <div class="col-sm-10">
                                            <div class="mb-3 col-sm-5 border container-previewFotVid">
                                                <span class="col-sm-2 col-form-label previewFotVid m-0 p-0" style="color: #000"></span>
                                            </div>
                                            <div class="container2Prev">
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                <video width="320" height="180" controls class="videoContainer mb-3">
                                                    <source src="" type="video/mp4" class="video-preview img-fluid  col-sm-5">
                                                </video>
                                            </div>
                                            <input type="file" class="form-control @error('filename') is-invalid @enderror" name="filename" id="filename" onchange="previewImage()">
                                            @error('filename')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="body">Content Berita</label>
                                        <div class="col-sm-10">
                                            @error('body')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Content Berita" id="body" style="width: 100%" name="body">{{ old('body') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                        <button type="submit" class="btn btn-primary" id="upload" onclick="uploadss()">Simpan</button>
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

    function previewImage(){
        const filename = document.querySelector('#filename');
        const imgPreview = document.querySelector('.img-preview');
        const videoPreview = document.querySelector('.video-preview');
        const previewFotVid = document.querySelector('.previewFotVid');
        const videoContainer = document.querySelector('.videoContainer');
        const container2Prev = document.querySelector('.container2Prev');
        const containerPreviewFotVid = document.querySelector('.container-previewFotVid');

        imgPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(filename.files[0]);

        oFReader.onload = function(oFREvnet){
            let data = oFReader.result;
            let hasilSplit = data.split(';base64,');
            previewFotVid.innerHTML = "";
            imgPreview.style.display = "none";
            videoContainer.style.display = 'none';
            containerPreviewFotVid.style.display = 'none';
            if(hasilSplit[0] == 'data:image/png' || hasilSplit[0] == 'data:image/jpg' || hasilSplit[0] == 'data:image/jpeg'){
                imgPreview.style.display = "block";
                container2Prev.style.display = "block";
                containerPreviewFotVid.style.display = 'block';
                previewFotVid.innerHTML = 'Yang akan di upload : Foto'
                imgPreview.src = oFREvnet.target.result;
            }else if(hasilSplit[0] == 'data:video/mp4' || hasilSplit[0] == 'data:video/mp3'){
                videoContainer.style.display = "block";
                containerPreviewFotVid.style.display = 'block';
                container2Prev.style.display = "block";
                container2Prev.innerHTML = "";
                container2Prev.innerHTML = `
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <video width="320" height="180" controls class="videoContainer mb-3" style="display: block">
                                                <source src="${oFREvnet.target.result}" type="video/${hasilSplit[0].split(':')[1].split('/')[1]}" class="video-preview img-fluid  col-sm-5">
                                            </video>`;
                previewFotVid.innerHTML = 'Yang akan di upload : video';
            }else{
                ""
            }
        };
    }

</script>

@endsection