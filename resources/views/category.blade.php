@extends('main')

@section('tambahcss')
<style>
    * {
        font-family: 'Nunito';
    }

    /* body {
        overflow: overlay;
    } */

    ::-webkit-scrollbar {
        width: 20px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #ffffff91;
        border-radius: 20px;
        border: 6px solid transparent;
        background-clip: content-box;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #a8bbbf;
    }

    nav.fixed-bottom span.text-dark {
        display: none;
    }

    @media (min-width: 768px) {
        nav .col-md-auto.bg-light.bg-gradient.shadow.position-absolute.d-flex.align-items-center {
            border-radius: 0 0 100px 0 !important;
        }

        nav.navbar.fixed-bottom.bg-light.bg-gradient.shadow {
            border-radius: 30% 30% 0 0 !important;
        }

        nav.fixed-bottom span.text-dark {
            display: inline;
        }

        nav .accordion {
            width: 75% !important;
        }

    }
</style>
@endsection

@section('content')
<div class="container" style="padding-block: 65px;">
    <div class="row g-2">
        {{-- kolum sub --}}
        {{-- @include('partials.subColumn') --}}
        <div class="col-md-9">
            <div class="card border-0 shadow h-100" >
                <h1 style="background: none;box-shadow: none;margin-top: 10px;margin-left: 20px;">{{ $namaHal }}
                </h1>
                
                <div class="card-body">
                    <div class="overflow-auto" style="height: 520px;">
                        <div class="row g-2" >
                            @if (count($datas) > 0)
                                @for ($i = 0; $i < count($datas); $i++)
                                <div class="col-md-6">
                                    <div class="card">
                                        @if ($fotoData[$i] == 'images/jika.jpg')
                                            <img src="{{ $fotoData[$i] }}" class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                        @else
                                            <img src="{{ asset('storage/'. $fotoData[$i]->filename ) }}" class="card-img-top mh-100" style="height: 133px;object-fit:cover;">
                                        @endif
                                        <div class="card-body">
                                            <a href="/show/{{ $datas[$i]->slug }}" style="text-decoration: none;color:black;">
                                                <h5 class="card-title">{!! $datas[$i]->nama !!}</h5>
                                                <p class="card-text">{!! $datas[$i]->alamat !!}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /kolum sub --}}

        @include('partials.rightColumn')
    </div>
</div>
@endsection

@section('tambahjs')
<script>
    /*** 4.0 - LoadMore ***/
    const loadMore = document.querySelector('.loadMore');
    const bungcon12 = document.querySelector('.bungcon12');
    let jumlah = 10;
    loadMore.addEventListener('click', function () {
        let penjumlahan = parseInt(jumlah) + 10;
        jumlah = penjumlahan;
        fetch('load-more?jumlah=' + penjumlahan)
            .then(response => response.json())
            .then(data => {
                bungcon12.innerHTML = '';
                data['fotos'].forEach((e, i) => {
                    if (e.length > 0) {
                        bungcon12.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <a class="fw-bold d-block text-decoration-none text-dark" href="show/${data['wisatas'][i]['slug']}">${data['wisatas'][i]['nama']}</a>
                            ${data['wisatas'][i]['jenis']}
                        </div>
                        <span class="badge bg-success rounded-pill">${i+1}</span>
                    </li>
                    `;
                    } else {
                        bungcon12.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <a class="fw-bold d-block text-decoration-none text-dark" href="show/${data['wisatas'][i]['slug']}">${data['wisatas'][i]['nama']}</a>
                            ${data['wisatas'][i]['jenis']}
                        </div>
                        <span class="badge bg-success rounded-pill">${i+1}</span>
                    </li>
                    `;
                    }
                });
            })
    })
</script>
@endsection