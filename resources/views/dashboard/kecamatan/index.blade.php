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
                        <h5>{{ $title }} (terdapat {{ count($datas) }} wisata)</h5>
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
                                @if (count($datas) == 0)
                                <div class="alert alert-primary" role="alert">
                                    Maaf tidak ada data ditemukan
                                </div>
                                @else 
                                    <div class="card text-center">
                                        <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                            <a class="nav-link active link-kecamatan link-hotel" href="#">Hotel</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link link-kecamatan link-destinasi" href="#">Destinasi</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link link-kecamatan link-makanan" href="#">Makanan</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link link-kecamatan link-oleh-oleh" href="#">Oleh Oleh</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link link-kecamatan link-travel" href="#">Travel</a>
                                            </li>
                                        </ul>
                                        </div>
                                        <div class="card-body hotel" style="height: 85vh; overflow: auto;">
                                            @if (count($hotel) > 0)
                                            <table class="table" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Hotel</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hotel as $profilWisata)    
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $profilWisata->nama }}</td>
                                                        <td>
                                                            <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">Lihat</a>
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
                                            @else
                                            <div class="alert alert-primary" role="alert">
                                                Maaf tidak ada data ditemukan
                                            </div>
                                            @endif
                                        </div>
                                        <div class="card-body destinasi" style="display: none;height: 85vh; overflow: auto;">
                                            @if (count($destinasi) > 0)
                                            <table class="table" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Destinasi</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($destinasi as $profilWisata)    
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $profilWisata->nama }}</td>
                                                        <td>
                                                            <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">Lihat</a>
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
                                            @else
                                            <div class="alert alert-primary" role="alert">
                                                Maaf tidak ada data ditemukan
                                            </div>
                                            @endif
                                        </div>
                                        <div class="card-body makanan"  style="display: none;height: 85vh; overflow: auto;">
                                            @if (count($makanan) > 0)
                                            <table class="table" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Makanan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($makanan as $profilWisata)    
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $profilWisata->nama }}</td>
                                                        <td>
                                                            <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">Lihat</a>
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
                                            @else
                                            <div class="alert alert-primary" role="alert">
                                                Maaf tidak ada data ditemukan
                                            </div>
                                            @endif
                                        </div>
                                        <div class="card-body oleh-oleh"  style="display: none;height: 85vh; overflow: auto;">
                                            @if (count($oleh) > 0)
                                            <table class="table" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Oleh Oleh</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($oleh as $profilWisata)   
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $profilWisata->nama }}</td>
                                                        <td>
                                                            <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">Lihat</a>
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
                                            @else
                                            <div class="alert alert-primary" role="alert">
                                                Maaf tidak ada data ditemukan
                                            </div>
                                            @endif
                                        </div>
                                        <div class="card-body travel"  style="display: none;height: 85vh; overflow: auto;">
                                            @if (count($travel) > 0)
                                            <table class="table" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Travel</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($travel as $profilWisata)    
                                                    <tr>
                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>{{ $profilWisata->nama }}</td>
                                                        <td>
                                                            <a href="/dashboard/profil-wisata/{{ $profilWisata->slug }}" class="btn btn-info">Lihat</a>
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
                                            @else
                                            <div class="alert alert-primary" role="alert">
                                                Maaf tidak ada data ditemukan
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    
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

<script>
    const linkKecamatan = document.querySelectorAll('.link-kecamatan');
    const linkHotel = document.querySelector('.link-hotel');
    const linkDestinasi = document.querySelector('.link-destinasi');
    const linkMakanan = document.querySelector('.link-makanan');
    const linkOlehOleh = document.querySelector('.link-oleh-oleh');
    const linkTravel = document.querySelector('.link-travel');
    const hotel = document.querySelector('.hotel');
    const destinasi = document.querySelector('.destinasi');
    const makanan = document.querySelector('.makanan');
    const olehOleh = document.querySelector('.oleh-oleh');
    const travel = document.querySelector('.travel');
    
    function hapusActive(){
        linkKecamatan.forEach(element => {
            element.classList.remove('active');
        });
    }    

    linkHotel.addEventListener('click', function(){
        hapusActive();
        linkHotel.classList.add('active');
        hotel.style.display = "block";
        destinasi.style.display = "none";
        makanan.style.display = "none";
        olehOleh.style.display = "none";
        travel.style.display = "none";
    })

    linkDestinasi.addEventListener('click', function(){
        hapusActive();
        linkDestinasi.classList.add('active');
        hotel.style.display = "none";
        destinasi.style.display = "block";
        makanan.style.display = "none";
        olehOleh.style.display = "none";
        travel.style.display = "none";
    })

    linkMakanan.addEventListener('click', function(){
        hapusActive();
        linkMakanan.classList.add('active');
        hotel.style.display = "none";
        destinasi.style.display = "none";
        makanan.style.display = "block";
        olehOleh.style.display = "none";
        travel.style.display = "none";
    })

    linkOlehOleh.addEventListener('click', function(){
        hapusActive();
        linkOlehOleh.classList.add('active');
        hotel.style.display = "none";
        destinasi.style.display = "none";
        makanan.style.display = "none";
        olehOleh.style.display = "block";
        travel.style.display = "none";
    })

    linkTravel.addEventListener('click', function(){
        hapusActive();
        linkTravel.classList.add('active');
        hotel.style.display = "none";
        destinasi.style.display = "none";
        makanan.style.display = "none";
        olehOleh.style.display = "none";
        travel.style.display = "block";
    })


</script>

@endsection