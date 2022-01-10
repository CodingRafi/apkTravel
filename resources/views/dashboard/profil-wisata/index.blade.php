@extends('dashboard.layouts.main1')

@section('container')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $title }}</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option" >
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            @if ($slug == 'berita-pembangunan' || $slug == 'berita-ekonomi' || $slug == 'berita-kesos' || $slug == 'berita-pemerintahan') 
                                @if (count($beritas) == 0)
                                <div class="alert alert-primary" role="alert">
                                    Maaf tidak data ditemukan
                                </div>
                                @else 
                                <table class="table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul Berita</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($beritas as $berita)  
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $berita->judul }}</td>
                                            <td>
                                                <a href="/dashboard/berita/{{ $berita->slug }}" class="btn btn-info">See</a>
                                                <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="btn btn-warning">Edit</a>
                                                <form action="/dashboard/berita/{{ $berita->slug }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            @else
                                @if (count($profilWisatas) == 0)
                                <div class="alert alert-primary" role="alert">
                                    Maaf tidak ada data ditemukan
                                </div>
                                @else 
                                <table class="table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama {{ $title }}</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($profilWisatas as $profilWisata)    
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $profilWisata->nama }}</td>
                                            <td>
                                                <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">See</a>
                                                <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}/edit" class="btn btn-warning">Edit</a>
                                                <form action="/dashboard/profil-wisata/{{ $profilWisata->slug }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Basic table card end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>
    

@endsection