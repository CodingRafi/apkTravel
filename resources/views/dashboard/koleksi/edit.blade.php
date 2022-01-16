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
                                <h5>Edit Koleksi</h5>
                            </div>
                            <div class="card-block">
                                <form action="/dashboard/koleksi/{{ $koleksi->slug }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group">
                                        <label for="nama">Nama koleksi</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $koleksi->nama) }}">
                                        @error('nama')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug Koleksi</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $koleksi->slug) }}">
                                        @error('slug')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-primary" type="submit" id="upload" onclick="uploadss()">Update</button>
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

<script>

    const slug = document.querySelector("#slug");
    const nama = document.querySelector("#nama");
    
    nama.addEventListener("change", function(){
        fetch('/dashboard/koleksi/checkSlug?nama='+nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

</script>
@endsection