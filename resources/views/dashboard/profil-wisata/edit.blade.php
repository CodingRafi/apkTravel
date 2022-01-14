@extends('dashboard.layouts.main1')

@section('container')

{{-- @dd($profilWisata) --}}

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
                                <h5>
                                    {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ? 'Tambah '. $title : $title }}
                                    {{ Request::is('dashboard/destinasi/create') ? 'Tambah Destinasi' : "" }}
                                    {{ Request::is('dashboard/makanan/create') ? 'Tambah Makanan' : "" }}
                                </h5>
                            </div>
                            <div class="card-block">
                                <form action="/dashboard/profil-wisata/{{ $profilWisata->slug }}" method="post" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama {{ $title }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama {{ $title }}" name="nama" id="nama" value="{{ $profilWisata->nama }}" required>
                                            @error('nama')   
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slug {{ $title }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug {{ $title }}" name="slug" id="slug" value="{{ $profilWisata->slug }}" required>
                                            @error('slug')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="oldLogo" value="{{ $profilWisata->logo }}">
                                            <div class="container3Prev" style="{{ ($profilWisata->logo) ? 'display:block;' : '' }}">
                                                @if ($profilWisata->logo)
                                                <img src="{{ asset('storage/' . $profilWisata->logo) }}" class="img-preview2 img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                <img src="" alt="" class="img-preview2 img-fluid mb-3 col-sm-5">
                                                @endif
                                            </div>
                                            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" onchange="previewImage1()" accept="image/*">
                                            @error('logo')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No Telepon" name="no_telp" id="no_telp" value="{{ $profilWisata->no_telp }}" required>
                                            @error('no_telp')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @if(!($title == 'Hotel' || $title == 'Travel' || $title == 'Oleh Oleh'))
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori {{ $title }}</label>
                                        <div class="col-sm-10">
                                            <select name="category_id" class="form-control">
                                                @if ($profilWisata->category_id == 1 || $profilWisata->category_id == 2 || $profilWisata->category_id == 3)
                                                    <option value="1" {{ (old('category_id', $profilWisata->category_id) == '1') ? 'selected' : '' }}>Wisata Alam</option>
                                                    <option value="2" {{ (old('category_id', $profilWisata->category_id) == '2') ? 'selected' : '' }}>Wisata Buatan</option>
                                                    <option value="3" {{ (old('category_id', $profilWisata->category_id) == '3') ? 'selected' : '' }}>Wisata Budaya</option>
                                                @else
                                                    <option value="4" {{ (old('category_id', $profilWisata->category_id) == '4') ? 'selected' : '' }}>Resto</option>
                                                    <option value="5" {{ (old('category_id', $profilWisata->category_id) == '5') ? 'selected' : '' }}>Kuliner</option>
                                                    <option value="6" {{ (old('category_id', $profilWisata->category_id) == '6') ? 'selected' : '' }}>Kafe</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    @if ($title == 'Hotel')
                                        <input type="hidden" name="category_id" value="8">
                                    @endif
                                    @if ($title == 'Travel' )
                                        <input type="hidden" name="category_id" value="9">
                                    @endif
                                    @if ($title == 'Oleh Oleh')
                                        <input type="hidden" name="category_id" value="7">
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto / Video</label>
                                        <div class="col-sm-10">
                                            <div class="mb-3 col-sm-5 border container-previewFotVid" style="{{ (count($foto) > 0 || count($video) > 0) ? 'display:block;' : '' }}">
                                                <span class="col-sm-2 col-form-label previewFotVid m-0 p-0" style="color: #000">{{ (count($foto) > 0) ? 'Yang akan di upload : Foto' : '' }}{{ (count($video) > 0) ? 'Yang akan di upload : Video' : '' }}</span>
                                            </div>
                                            <div class="container2Prev" style="{{ (count($foto) > 0 || count($video) > 0) ? 'display:block;' : '' }}">
                                                @if (count($foto) > 0)
                                                    <input type="hidden" name="oldFoto" value="{{ $foto[0]->filename }}">
                                                    <img src="{{ asset('storage/' . $foto[0]->filename) }}" class="img-preview img-fluid mb-3 col-sm-5" style="display: block">
                                                    <video width="320" height="180" controls class="videoContainer mb-3">
                                                        <source class="video-preview img-fluid col-sm-5">
                                                    </video>
                                                @elseif(count($video) > 0)
                                                    <input type="hidden" name="oldVideo" value="{{ $video[0]->filename }}">
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    <video width="320" height="180" controls class="videoContainer mb-3" style="display: block">
                                                        <source src="{{ asset('storage/' . $video[0]->filename) }}" type="video/{{ explode('.', explode('/', $video[0]->filename)[1])[1] }}" class="video-preview img-fluid  col-sm-5">
                                                    </video>
                                                @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    <video src="" class="video-preview img-fluid mb-3 col-sm-5 videoContainer"></video>
                                                @endif
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
                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            @error('deskripsi')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Content Berita" id="body" style="width: 100%" name="deskripsi">{{ old('deskripsi' , $profilWisata->deskripsi) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            @error('alamat')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Alamat" id="body" style="width: 100%" name="alamat">{{ old('alamat' , $profilWisata->alamat) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pengelola</label>
                                        <div class="col-sm-10">
                                            @error('pengelola')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Pengelola" id="body" style="width: 100%" name="pengelola">{{ old('pengelola' , $profilWisata->pengelola) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" placeholder="Instagram" name="instagram" id="instagram" value="{{ $profilWisata->instagram }}">
                                        </div>
                                        @error('instagram')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Youtube</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('youtube') is-invalid @enderror" placeholder="Youtube" name="youtube" id="youtube" value="{{ $profilWisata->youtube }}">
                                        </div>
                                        @error('youtube')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" placeholder="Twitter" name="twitter" id="twitter" value="{{ $profilWisata->twitter }}">
                                        </div>
                                        @error('twitter')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('facebook') is-invalid @enderror" placeholder="Facebook" name="facebook" id="facebook" value="{{ $profilWisata->facebook }}">
                                        </div>
                                        @error('facebook')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Whatsapp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" placeholder="Whatsapp" name="whatsapp" id="whatsapp" value="{{ $profilWisata->whatsapp }}">
                                        </div>
                                        @error('whatsapp')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('website') is-invalid @enderror" placeholder="Website" name="website" id="website" value="{{ $profilWisata->website }}">
                                        </div>
                                        @error('website')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
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
    const nama = document.querySelector("#nama");
    const slug = document.querySelector("#slug");

    nama.addEventListener("change", function(){
        fetch('/dashboard/profil-wisata/checkSlug?nama='+nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

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

    function previewImage1(){
        const container3Prev = document.querySelector('.container3Prev');
        const imgPreview2 = document.querySelector('.img-preview2');
        const logo = document.querySelector('#logo');
        

        const oFReader = new FileReader();
        oFReader.readAsDataURL(logo.files[0]);

        oFReader.onload = function(oFREvnet){
            imgPreview2.style.display = "block";
            container3Prev.style.display = 'block';
            imgPreview2.src = oFREvnet.target.result;
        }
    }
</script>

@endsection