@extends('dashboard.layouts.main1')

@section('container')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<style>

.dropdown-toggle:after {
   content: none;
}

</style>

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Basic table card start -->
                <form action="/dashboard/config/update" method="post">
                    @method('patch')
                    @csrf
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

                        <div class="contai" style="position: absolute;width: 95%;display: flex;justify-content: end;">

                            <div class="btn-group dropleft">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" style="padding: 0;background: transparent;border: none;box-shadow: none">
                                  
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
                                    preserveAspectRatio="xMidYMid meet" style="width: 20px">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                    fill="#000000" stroke="none">
                                    <path d="M2205 5106 c-41 -18 -82 -68 -94 -114 -5 -20 -37 -152 -72 -292 -34
                                    -140 -65 -262 -70 -270 -4 -9 -38 -26 -76 -40 -37 -13 -111 -43 -163 -67 -52
                                    -24 -102 -42 -110 -40 -8 2 -120 68 -248 145 -128 78 -248 144 -267 148 -71
                                    13 -97 -6 -337 -244 -125 -124 -235 -241 -244 -260 -34 -72 -21 -105 144 -380
                                    l151 -252 -33 -73 c-18 -39 -43 -103 -57 -141 -15 -43 -31 -72 -44 -77 -11 -5
                                    -148 -40 -304 -78 -287 -70 -315 -80 -355 -135 -20 -27 -21 -40 -21 -376 0
                                    -336 1 -349 21 -376 40 -54 68 -65 355 -135 156 -38 293 -73 304 -78 13 -5 29
                                    -33 44 -77 14 -38 43 -110 67 -161 l42 -91 -136 -226 c-112 -188 -136 -235
                                    -140 -275 -3 -31 1 -58 11 -77 26 -48 478 -492 510 -500 67 -16 106 0 336 138
                                    l224 135 91 -42 c50 -23 122 -53 160 -66 43 -15 72 -31 77 -44 5 -11 40 -148
                                    78 -304 70 -287 81 -315 135 -355 27 -20 40 -21 376 -21 336 0 349 1 376 21
                                    54 40 65 68 135 355 38 156 73 293 78 304 5 13 33 29 77 45 38 13 111 43 163
                                    67 l94 44 235 -141 c222 -132 238 -140 287 -140 70 0 85 12 341 271 222 225
                                    243 254 230 322 -3 18 -69 137 -147 266 l-140 234 45 101 c24 56 52 125 63
                                    155 11 32 26 57 38 62 11 5 148 40 304 78 287 70 315 81 355 135 20 27 21 40
                                    21 376 0 336 -1 349 -21 376 -40 54 -68 65 -355 135 -156 38 -293 73 -304 78
                                    -13 5 -29 34 -44 77 -14 38 -42 107 -63 154 -22 46 -37 92 -35 101 3 9 62 112
                                    131 228 151 250 160 270 151 325 -7 37 -29 63 -234 269 -124 126 -239 238
                                    -255 250 -21 15 -45 21 -81 22 -49 0 -64 -8 -289 -142 -131 -79 -241 -143
                                    -246 -143 -4 0 -46 17 -92 38 -45 21 -114 49 -152 63 -43 15 -72 31 -77 44 -5
                                    11 -40 148 -78 304 -70 287 -80 315 -135 355 -26 20 -42 21 -364 23 -265 2
                                    -344 0 -367 -11z m498 -1507 c415 -62 750 -354 865 -754 160 -552 -165 -1132
                                    -723 -1293 -552 -160 -1132 165 -1293 723 -190 657 309 1325 996 1334 46 1
                                    116 -4 155 -10z"/>
                                    </g>
                                    </svg>


                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 15px 10px;">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input swit" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Edit Data</label>
                                      </div>
                                      <button type="button" class="badge buttonModalKoleksi" data-toggle="modal" data-target="#koleksi" style="font-size:12px;background: none;border: none;color: #000;">
                                        Buat koleksi baru
                                    </button>
                                </div>
                              </div>
                        </div>

                        <input type="hidden" name="key" value="{{ $data[0]->id }}">

                        <div class="dataTampil" style="width: 90%; @error('contact') display: none; @enderror @error('alamat') display: none;@enderror">
                            <p style="font-size: inherit;">Contact Center : <span class="contact">{{ $data[0]->contact }}</span></p>
                            <p style="font-size: inherit;">Alamat : <span class="alamat">{{ $data[0]->alamat }}</span></p>
                        </div>
                        
                        <div class="dataEdit" style="display: none;width: 90%">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact Center</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact Center" name="contact" id="contact" value="{{ old('contact', $data[0]->contact) }}" required>
                                    @error('contact')   
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" id="alamat" value="{{ old('alamat', $data[0]->alamat) }}" required>
                                    @error('alamat')   
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                <button class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>


                        @if (count($koleksifoto) > 0)   
                        <h5 class="mt-4">Koleksi Foto</h5>
                        <div class="bungkusContainer" style="display: flex;width: 100%;flex-wrap: wrap">
                            @for ($i = 0; $i < count($koleksifoto); $i++)
                                <div class="card" style="width: 180px;margin: 0 10px;">
                                        @if (count($fotos[$i]) > 0)
                                            <div class="hiden" style="height: 90px;overflow: hidden;">
                                                <img src="{{ asset('storage/'.$fotos[$i][0]->filename) }}" class="card-img-top" style="overflow: hidden;">
                                            </div>
                                        @else   
                                            <div class="hiden" style="height: 90px;overflow: hidden;">
                                                <img src="/images/jika.jpg" class="card-img-top" >
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">{{ $koleksis[$i]->nama }}</h5>
                                            <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">Total : 
                                            @if (count($fotos[$i]) > 0)
                                                <span>{{ count($fotos[$i]) }}</span>
                                            @else   
                                                <span>0</span>
                                            @endif
                                            </h5>
                                            <a href="/dashboard/koleksi/{{ $koleksis[$i]->slug }}" class="card-subtitle mb-2 text-muted">Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                            @endfor
                        </div>
                        @endif
                        @if (count($koleksivideo) > 0)   
                        <h5 class="mt-4">Koleksi Video</h5>
                        <div class="bungkusContainer" style="display: flex;width: 100%;flex-wrap: wrap">
                            @for ($i = 0; $i < count($koleksivideo); $i++)
                                <div class="card" style="width: 180px;margin: 0 10px;">
                                    @if (count($videos[$i]) > 0)
                                        <div class="hiden" style="height: 90px;overflow: hidden;">
                                            <video src="{{ asset('storage/'.$videos[$i][0]->filename) }}" class="card-img-top"></video>
                                        </div>
                                    @else   
                                        <div class="hiden" style="height: 90px;overflow: hidden;">
                                            <img src="/images/jika.jpg" class="card-img-top" >
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">{{ $koleksis[$i]->nama }}</h5>
                                        <h5 class="card-title" style="font-size: 13px;margin-bottom: 3px;">Total : 
                                        @if (count($videos[$i]) > 0)
                                            <span>{{ count($videos[$i]) }}</span>
                                        @else   
                                            <span>0</span>
                                        @endif
                                        </h5>
                                        <a href="/dashboard/koleksi/{{ $koleksis[$i]->slug }}" class="card-subtitle mb-2 text-muted">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        @endif

                    </div>
                </div>
                </form>
                <!-- Basic table card end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
</div>

<div class="modalkey modal fade @error('nama') show @enderror @error('slug') show @enderror @error('kepemilikasi') show @enderror" id="koleksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" @error('nama') style="display: block;background: rgba(69,90,100, .5);" @enderror @error('slug') style="display: block;background: rgba(69,90,100, .5);" @enderror @error('kepemilikasi') style="display: block;background: rgba(69,90,100, .5);" @enderror>
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/dashboard/koleksi/config" method="post">
            @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Koleksi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="nama">Nama koleksi</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
                @error('nama')   
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error('slug')   
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="hidden" name="keterangan" value="config">
            <div class="form-group">
                <label for="jenis">Jenis Koleksi</label>
                <select class="form-control" id="jenis" name="jenis">
                  <option value="koleksifoto" {{ (old('jenis') == 'koleksifoto') ? 'selected' : '' }}>Foto</option>
                  <option value="koleksivideo" {{ (old('jenis') == 'koleksivideo') ? 'selected' : '' }}>Video</option>
                </select>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary tombolClose" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Buat</button>
        </div>
       </form>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script>
    const contact = document.querySelector('.contact');
    const alamat = document.querySelector('.alamat');
    const swit = document.querySelector('.swit');
    const dataEdit = document.querySelector('.dataEdit');
    const dataTampil = document.querySelector('.dataTampil');

    nama.addEventListener("change", function(){
        fetch('/dashboard/koleksi/checkSlug?nama='+nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    swit.addEventListener('click', function(){
        swit.classList.toggle('aktip');

        if(swit.classList.contains('aktip') == true){
            dataEdit.style.display = "block";
            dataTampil.style.display = "none";
        }else{
            dataEdit.style.display = "none";
            dataTampil.style.display = "block";
        }
    })
</script>
    

@endsection