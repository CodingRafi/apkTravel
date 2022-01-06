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
                    <div class="card-block table-border-style">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card" style="box-shadow: 0 0 0;">
                                    <div class="tampilanAwal">
                                        <div class="bag2" style="width: 45%;margin-left: 55%;position: absolute;height: 68%;">
                                            <div class="bag1" style="background: #000;opacity: .6;height: 100%;width: 100%;"></div>
                                        </div>
                                        <div class="bag2" style="width: 45%;margin-left: 55%;position: absolute;height: 68%;">
                                            <div class="bag1" style="height: 100%;width: 100%;display: flex;justify-content: center;align-items: center;color: #fff;font-weight: 600;font-size: 20px;">
                                                <span>22</span>
                                            </div>
                                        </div>
                                        <img src="/images/aaa.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body" style="padding: 10px 0 0 0;">
                                        <h5 class="card-title" style="font-size: 15px;    margin-bottom: 3px;">Card title</h5>
                                        <a href="#" class="card-subtitle mb-2 text-muted">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
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
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                @error('nama')   
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
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
  </script>
  
@endsection