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
                                <h5>
                                    {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ? 'Tambah '. $title : $title }}
                                    {{ Request::is('dashboard/destinasi/create') ? 'Tambah Destinasi' : "" }}
                                    {{ Request::is('dashboard/makanan/create') ? 'Tambah Makanan' : "" }}
                                </h5>
                            </div>
                            <div class="card-block">
                                <form action="/dashboard/berita" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ?  $title : "" }}
                                            {{ Request::is('dashboard/destinasi/create') ? 'Destinasi' : "" }}
                                            {{ Request::is('dashboard/makanan/create') ? 'Makanan' : "" }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ?  $title : "" }}{{ Request::is('dashboard/destinasi/create') ? 'Destinasi' : "" }}{{ Request::is('dashboard/makanan/create') ? 'Makanan' : "" }}" name="nama" id="nama">
                                        </div>
                                        @error('judul')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slug {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ?  $title : "" }}{{ Request::is('dashboard/destinasi/create') ? 'Destinasi' : "" }}{{ Request::is('dashboard/makanan/create') ? 'Makanan' : "" }}</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ?  $title : "" }}{{ Request::is('dashboard/destinasi/create') ? 'Destinasi' : "" }}{{ Request::is('dashboard/makanan/create') ? 'Makanan' : "" }}" name="slug" id="slug">
                                        </div>
                                        @error('slug')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No Telepon" name="no_telp" id="no_telp">
                                        </div>
                                        @error('no_telp')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    @if(!(Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')))
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori {{ Request::is('dashboard/destinasi/create') ? 'Destinasi' : "" }}{{ Request::is('dashboard/makanan/create') ? 'Makanan' : "" }}</label>
                                        <div class="col-sm-10">
                                            <select name="kategory" class="form-control">
                                                @if (Request::is('dashboard/destinasi/create'))
                                                    <option value="1">Wisata Alam</option>
                                                    <option value="2">Wisata Buatan</option>
                                                    <option value="3">Wisata Budaya</option>
                                                @else
                                                    <option value="4">Resto</option>
                                                    <option value="5">Kuliner</option>
                                                    <option value="6">Kafe</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jam Buka</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('jam_buka') is-invalid @enderror" placeholder="Jam Buka" name="jam_buka" id="jam_buka">
                                        </div>
                                        @error('jam_buka')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jam Tutup</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('jam_tutup') is-invalid @enderror" placeholder="Jam Tutup" name="jam_tutup" id="jam_tutup">
                                        </div>
                                        @error('jam_tutup')   
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto / Video</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="foto" id="foto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <input id="deskripsi" type="hidden" name="deskripsi">
                                            <trix-editor input="deskripsi"></trix-editor>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input id="alamat" type="hidden" name="alamat">
                                            <trix-editor input="alamat"></trix-editor>
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
    const nama = document.querySelector("#nama");
    const slug = document.querySelector("#slug");

    nama.addEventListener("change", function(){
        fetch('/dashboard/campuran/checkSlug?nama='+nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

</script>

@endsection