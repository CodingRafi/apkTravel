@extends('dashboard.layouts.main1')

@section('container')

@if (session()->has('success'))   
    <div class="container-fluid p-0">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 93%;margin: auto;margin-top: 15px;margin-bottom: -15px;">
            {{ session('success') }}
            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size: 25px;">&times;</span>
            </button>
        </div>
    </div>
@endif

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
                        <div class="card-header-right" style="display:flex;align-items: center;">
                            <button type="button" class="badge buttonModalKoleksi" data-toggle="modal" data-target="#koleksi" style="font-size:12px;background: none;border: none;">
                                Buat koleksi baru
                            </button>
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    @if (count($koleksies) == 0)
                        <div class="alert alert-primary" role="alert" style="width: 90%;margin: 20px auto;">
                            Belum ada koleksi Foto
                        </div>
                    @else
                        <div class="card-block table-border-style">
                            <div class="row">
                                    {{-- @dd($fotos) --}}
                                    @for ($i = 0; $i < count($koleksies); $i++)
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card" style="box-shadow: 0 0 0;">
                                                <div class="tampilanAwal" style="height: 19vh;overflow: hidden;">
                                                    <div class="bag2" style="width: 45%;margin-left: 55%;position: absolute;height: 68%;">
                                                        <div class="bag1" style="background: #000;opacity: .6;height: 100%;width: 100%;"></div>
                                                    </div>
                                                    <div class="bag2" style="width: 45%;margin-left: 55%;position: absolute;height: 68%;">
                                                        <a href="/dashboard/koleksi/{{ $koleksies[$i]->slug }}/edit" class="btn btn-warning editKoleksi" style="padding: 5px;display: flex;justify-content: center;align-items: center;margin-left: 66%;position: absolute;">
                                                            <svg style="width: 20px;" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24.000000 24.000000" preserveAspectRatio="xMidYMid meet">

                                                            <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)"
                                                            stroke="none">
                                                            <path d="M126 160 c-31 -32 -56 -66 -56 -74 0 -31 36 -15 89 38 38 38 48 54
                                                            35 53 -11 -1 -19 4 -19 13 0 9 7 14 18 12 20 -3 23 4 3 11 -9 4 -36 -17 -70
                                                            -53z m50 9 c7 -12 -64 -89 -83 -89 -22 0 -15 18 23 60 38 42 48 47 60 29z"/>
                                                            <path d="M36 184 c-22 -21 -22 -127 0 -148 10 -11 34 -16 74 -16 73 0 91 15
                                                            88 73 l-1 42 -4 -40 c-3 -22 -9 -45 -15 -52 -13 -17 -120 -17 -136 -1 -16 16
                                                            -16 123 1 136 7 6 30 12 52 15 l40 4 -42 1 c-26 1 -47 -4 -57 -14z"/>
                                                            </g>
                                                            </svg>
                                                        </a>
                                                        <input type="hidden" name="slugKoleksi" value="{{ $koleksies[$i]->slug }}" class="slugKoleksi">
                                                        <input type="hidden" name="hasilCek" class="hasilCek">
                                                        <div class="bag1" style="height: 100%;width: 100%;display: flex;justify-content: center;align-items: center;color: #fff;font-weight: 600;font-size: 20px;">
                                                            @isset($fotos[$i]['fotoAda'])
                                                                <span>{{ count($fotos[$i]['fotoAda']) }}</span>
                                                            @endisset
                                                                
                                                            @isset($fotos[$i]['fotoGada'])
                                                                <span>0</span>
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    @isset($fotos[$i]['fotoAda'])
                                                        <img src="{{ asset('storage/'.$fotos[$i]['fotoAda'][$i]->filename) }}" class="card-img-top">
                                                    @endisset
                                                        
                                                    @isset($fotos[$i]['fotoGada'])
                                                        <img src="{{ $fotos[$i]['fotoGada']}}" class="card-img-top">
                                                    @endisset
                                                
                                                </div>
                                                <div class="card-body d-flex" style="padding: 10px 0 0 0;">
                                                    <div class="bagkiri" style="width: 77%;">
                                                        <h5 class="card-title" style="font-size: 15px;margin-bottom: 3px;">{{ $koleksies[$i]->nama }}</h5>
                                                        <a href="/dashboard/koleksi/{{ $koleksies[$i]->slug }}" class="card-subtitle mb-2 text-muted">Lihat Selengkapnya</a>
                                                    </div>
                                                    <div class="bagkanan" style="width: 17%">
                                                        
                                                        <form action="/dashboard/koleksi/{{ $koleksies[$i]->slug }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="return confirm('Yakin?')" type="submit" class="btn btn-danger" style="padding: 5px;display: flex;justify-content: center;align-items: center;margin-top: 5px">
                                                                <svg style="width: 20px;" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.000000 24.000000"
                                                                preserveAspectRatio="xMidYMid meet">

                                                                <g transform="translate(0.000000,24.000000) scale(0.100000,-0.100000)"
                                                                stroke="none">
                                                                <path d="M83 226 c-4 -8 -19 -16 -33 -18 -21 -2 -25 -8 -22 -33 2 -16 6 -61
                                                                10 -100 l7 -70 75 0 75 0 7 70 c4 39 8 84 10 100 3 25 -1 31 -22 33 -14 2 -29
                                                                10 -33 18 -4 8 -21 14 -37 14 -16 0 -33 -6 -37 -14z m50 -13 c-7 -2 -19 -2
                                                                -25 0 -7 3 -2 5 12 5 14 0 19 -2 13 -5z m67 -33 c0 -6 -33 -10 -80 -10 -47 0
                                                                -80 4 -80 10 0 6 33 10 80 10 47 0 80 -4 80 -10z m-10 -79 c0 -88 -3 -91 -70
                                                                -91 -67 0 -70 3 -70 91 l0 59 70 0 70 0 0 -59z"/>
                                                                <path d="M77 133 c-11 -10 -8 -91 3 -98 6 -4 10 15 10 49 0 57 -1 61 -13 49z"/>
                                                                <path d="M110 85 c0 -30 5 -55 10 -55 6 0 10 25 10 55 0 30 -4 55 -10 55 -5 0
                                                                -10 -25 -10 -55z"/>
                                                                <path d="M150 85 c0 -35 4 -54 10 -50 6 3 10 26 10 50 0 24 -4 47 -10 50 -6 4
                                                                -10 -15 -10 -50z"/>
                                                                </g>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                            </div>
                        </div>
                    @endif
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

<!-- Modal -->
<div class="modalkey modal fade @error('nama') show @enderror @error('slug') show @enderror" id="koleksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" @error('nama') style="display: block;background: rgba(69,90,100, .5);" @enderror @error('slug') style="display: block;background: rgba(69,90,100, .5);" @enderror>
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/dashboard/koleksi" method="post">
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
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
                @error('nama')   
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required>
                @error('slug')   
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
 
  <script>

          const slug = document.querySelector("#slug");
          const nama = document.querySelector("#nama");
          const close = document.querySelector('.close');
          const modal = document.querySelector('.modalkey');
          const tombolClose = document.querySelector('.tombolClose');
          const editKoleksi = document.querySelectorAll('.editKoleksi');
          const slugKoleksi = document.querySelectorAll('.slugKoleksi');
          const modalContent = document.querySelector('.modal-content');
          
    
          close.addEventListener('click', function(){
            modal.classList.remove('show');
            modal.style.display = 'none';
            modal.style.background = 'none';
          })
          tombolClose.addEventListener('click', function(){
            modal.classList.remove('show');
            modal.style.display = 'none';
            modal.style.background = 'none';
          })
    
          nama.addEventListener("change", function(){
            fetch('/dashboard/koleksi/checkSlug?nama='+nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })
      



    // editKoleksi.forEach( (e,i) => {
    //     e.addEventListener("click", function(){
    //         modal.classList.add('show');
    //         modal.style.display = 'block';
    //         modal.style.background = 'rgba(69,90,100, .5)';
    //         modalContent.innerHTML = '';
    //         modalContent.innerHTML = `<form action="/dashboard/koleksi/update" method="post">
    //                                     @csrf
    //                                     @method('patch')
    //                                 <div class="modal-header">
    //                                 <h5 class="modal-title" id="exampleModalLabel">Tambah Koleksi</h5>
    //                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //                                     <span aria-hidden="true">&times;</span>
    //                                 </button>
    //                                 </div>
    //                                 <div class="modal-body">
    //                                     <div class="form-group">
    //                                         <label for="nama">Nama koleksi</label>
    //                                         <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
    //                                         @error('nama')   
    //                                             <div class="invalid-feedback d-block">
    //                                                 {{ $message }}
    //                                             </div>
    //                                         @enderror
    //                                     </div>
    //                                     <div class="form-group">
    //                                         <label for="slug">Slug</label>
    //                                         <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
    //                                         @error('slug')   
    //                                             <div class="invalid-feedback d-block">
    //                                                 {{ $message }}
    //                                             </div>
    //                                         @enderror
    //                                     </div>
    //                                 </div>
    //                                 <div class="modal-footer">
    //                                 <button type="button" class="btn btn-secondary tombolClose" data-dismiss="modal">Close</button>
    //                                 <button type="submit" class="btn btn-primary">Buat</button>
    //                                 </div>
    //                             </form>`;

    //         const slug = document.querySelector("#slug");
    //         const nama = document.querySelector("#nama");
    //         fetch('/dashboard/koleksi/checkKoleksi?slug='+slugKoleksi[i].value)
    //         .then(response => response.json())
    //         .then(data => {
    //             nama.value = data.data.nama,
    //             slug.value = data.data.slug   
    //         })

    //     })
    // });
    
    // slug();

  </script>
  
@endsection