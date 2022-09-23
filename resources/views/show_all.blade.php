@extends('main')

@section('content')
<div class="container" style="padding-block: 65px;">
    <div class="card h-100 mb-3">
        <div class="card-header position-relative p-3">
            <div class="row">
                <div class="col">
                <h4 style="text-transform: capitalize;">{{ (request('search') || request('kategori')) ? (request('search') ?? str_replace("-", " ", request('kategori'))) : 'Semua Wisata' }} ({{ count($profils) }})</h5>
                </div>
                <div class="col-5">
                    <div class="container-fluid p-0 d-flex" style="right: 0">
                        <div class="dropdown" style="margin-right: 1rem;">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Kategori
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <form action="/destinasi/show" method="get">
                                    <button type="submit" class="dropdown-item">Semua Wisata</button>
                                </form>
                                @foreach ($categories as $key => $categori)
                                    @if ($key < 9)
                                    <form action="" method="get">
                                        <input type="hidden" name="kategori" value="{{ $categori->slug }}">
                                        <button type="submit" class="dropdown-item">{{ $categori->nama }}</button>
                                    </form>
                                    @endif
                                @endforeach
                            </ul>
                          </div>
                          <form action="" method="get">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search" name="search">
                                  <button class="btn btn-primary" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row" >
                @if (count($profils) > 0)
                    @foreach ($profils as $profil)
                        <div class="col-md-6" style="margin: .5rem 0">
                            <div class="card">
                                @if (count($profil->foto) > 0)
                                    <img src="{{ asset('storage/'. $profil->foto[0]->filename) }}"
                                    class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                @else
                                    <img src="/images/jika.jpg" class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                @endif
                                <div class="card-body">
                                    <a href="/show/{{ $profil->slug }}"
                                        class="card-title h5 text-decoration-none text-dark">{{ $profil->nama }}</a>
                                    <p class="card-text"><small class="text-muted">{!!
                                            $profil->alamat !!}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container">
                        <div class="alert alert-primary" role="alert">
                            Maaf tidak ada data ditemukan
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection