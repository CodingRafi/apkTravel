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
                        <h5>{{ $next }}</h5>
                        <div class="card-header-right" style="display:flex;align-items: center;">
                            <a href="/dashboard/foto/{{ $slug }}/tambah" class="badge" style="font-size:12px;">Tambah
                                Foto</a>
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="row">

                            @foreach ($koleksinya as $koleksi)
                            <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                                <img src="{{ asset('storage/'.$koleksi->filename) }}"
                                    class="card-img-top imagekoleksi img-fluid">
                                <div class="d-grid gap-2 mt-2">
                                    <form action="/dashboard/foto/{{ $koleksi->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="slug" value="{{ $slug }}">
                                        <button class="btn btn-danger" style="width: 100%;padding: 3px;" type="submit"
                                            onclick="return confirm('Yakin?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach

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


<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true"
    style="background: rgba(69,90,100, .7);z-index: 99999;overflow: auto;">
    <div class="container" style="height: 100vh;display: flex;padding: 0;">
        <div id="carouselExampleControls" class="carousel slide" data-interval="false"
            style="display: flex;justify-content: flex-end;">
            <div
                style="position: absolute;z-index: 9;width: 50px;height: 50px;margin: 0;display: flex;justify-content: center;align-items: center;padding: 0;border:none;background: #3a3838;background: rgba(58,56,56,.5);">
                <button type="button" class="close"
                    style="padding: 0;margin: 0;font-size: 20px;width: 100%;height: 100%;color: #fff;">
                    x
                </button>
            </div>
            <div class="carousel-inner">
                @if (count($koleksinya) > 0)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/'.$koleksinya[0]->filename) }}" class="d-block w-100" alt="...">
                </div>
                @foreach ($koleksinya->skip(1) as $koleksi)
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$koleksi->filename) }}" class="d-block w-100" alt="...">
                </div>
                @endforeach
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev"
                style="border: none;background: none;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="cursor: pointer;"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next"
                style="border: none;background: none;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="cursor: pointer;"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</div>

<script>
    const button = document.querySelector('.close');
    const modal = document.querySelector('.modal');
    button.addEventListener('click', function () {
        modal.classList.remove('show');
        modal.style.display = 'none';
    })


    const imagekoleksi = document.querySelectorAll('.imagekoleksi');
    const carouselItem = document.querySelectorAll('.carousel-item');

    function hapusActive() {
        carouselItem.forEach(e => {
            e.classList.remove('active')
        })
    }

    imagekoleksi.forEach((e, i) => {
        e.addEventListener('click', function () {
            modal.classList.add('show');
            modal.style.display = 'block';
            hapusActive();
            carouselItem[i].classList.add('active');
        })
    });

</script>


@endsection
