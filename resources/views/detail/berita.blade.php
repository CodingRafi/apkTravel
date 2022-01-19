{{-- @dd($fotos[0]['fotoAda'][0]->filename) --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="/css/home.css">

    <title>Kota Depok</title>
</head>

<body>
    {{-- Topbar --}}


    @include('partials.topbar')


    {{-- Konten --}}
    <div class="main detail">
        @if ($data[0]->category_id >= 10)
            <h2>Berita</h2>
            <div class="detail-columns flex">
                <div class="sticky-container">
                    <img src="{{asset("storage/".$foto[0]->filename)}}" alt="feature image" class="sticky-item">
                </div>
                <div>
                    <div class="berita-header">
                        <h2>{{$data[0]->judul}}</h2>                
                        <pre>Tanggal posting {{$data[0]->created_at}}</pre>
                    </div>
                    <p>{!! $data[0]->body !!}</p>
                </div>
            </div>
       
        @else
            <h2>Profil Wisata</h2>
            <div class="detail-columns flex">
                <div class="sticky-container">
                    @if (count($foto) > 0)   
                    <img src="{{$foto[0]->filename}}" alt="feature image" >
                    @endif
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>{{ $data[0]->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">No. Telp</th>
                                <td>{{ $data[0]->no_telp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{!! $data[0]->alamat !!}</td>
                            </tr>
                            @if ($data[0]->instagram) 
                            <tr>
                                <th scope="row">Instagram</th>
                                <td>@{{ $data[0]->instagram }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->youtube)    
                            <tr>
                                <th scope="row">youtube</th>
                                <td>{{ $data[0]->youtube }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->twitter)    
                            <tr>
                                <th scope="row">Twitter</th>
                                <td>{{ $data[0]->twitter }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->facebook)    
                            <tr>
                                <th scope="row">Facebook</th>
                                <td>{{ $data[0]->facebook }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->whatsapp)    
                            <tr>
                                <th scope="row">Whatsapp</th>
                                <td>{{ $data[0]->whatsapp }}</td>
                            </tr>
                            @endif
                            @if ($data[0]->website)    
                            <tr>
                                <th scope="row">Website</th>
                                <td>{{ $data[0]->website }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
               
                <div>
                    <div class="berita-header">
                        <h2>{{ $data[0]->nama }}</h2>
                        <pre>posted on 9 hours ago</pre>
                    </div>
                    <h5>Pengelola</h5>
                    {!! $data[0]->pengelola !!}
                    <h5>Deskripsi</h5>
                    {!! $data[0]->deskripsi !!}
                    {!! $data[0]->body !!}
                </div>
            </div>
        </div>
        <div class="gallery-frame">
            <h2>Gallery foto</h2>
            <div class="gallery-scroll flex">
                {{-- GAMBAR KECIL --}}

                {{-- <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/berita.jpg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div>
                <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/w01.jpg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div>
                <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/h1c.jpg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div>
                <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/h2b.jpeg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div>
                <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/berita.jpg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div>
                <div class="bungkus img-fluid" style="width: 23vw;margin: 5px;cursor: pointer;">
                    <img src="/images/home-screen/berita.jpg" class="card-img-top imagekoleksi img-fluid">
                    <div class="d-grid gap-2 mt-2">
                    </div>
                </div> --}}

                {{-- /GAMBAR KECIL --}}

            @if (count($koleksiFoto) > 0)
            <div class="gallery-frame">
                <h2>Gallery foto</h2>
                <div class="gallery-scroll flex">
                    @foreach ($koleksiFoto as $item)
                    <img src="{{ asset('storage/'. $fotos[0]['fotoAda'][0]->filename) }}">
                    @endforeach
                </div>
            </div>
            @endif 
            @if (count($koleksiVideo) > 0)  
            <div class="gallery-frame">
                <h2>Gallery video</h2>
                <div class="gallery-scroll flex">
                    @foreach ($koleksiVideo as $item)
                    <video src="{{ asset('storage/'. $videos[0]['videoAda'][0]->filename) }}"></video>
                    @endforeach
                </div>
            </div>
            @endif
            
            
        @endif
    </div>




    {{-- GAMBAR GEDE --}}
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true"
        style="background: rgba(69,90,100, .7);z-index: 99999;overflow: auto;">
        <div style="height: 100vh;display: flex;padding: 0;">
            <div id="carouselExampleControls" class="carousel slide" data-interval="false"
                style="display: flex;justify-content: flex-end;">
                <div
                    style="position: absolute;z-index: 9;width: 50px;height: 50px;margin: 0;display: flex;justify-content: center;align-items: center;padding: 0;border:none;background: #3a3838;background: rgba(58,56,56,.5);">
                    <button type="button" class="close"
                        style="padding: 0;margin: 0;font-size: 20px;width: 100%;height: 100%;color: #fff;">
                        x
                    </button>
                </div>
                <div class="carousel-inner" style="width: 100vw;">
                    {{-- @if (count($koleksinya) > 0) --}}
                    {{-- <div class="carousel-item active"> --}}
                        {{-- <img src="{{ asset('storage/'.$koleksinya[0]->filename) }}" class="d-block w-100"
                        alt="..."> --}}
                        {{-- <img src="/images/home-screen/berita.jpg" class="d-block w-100" alt="..."> --}}
                    {{-- </div> --}}
                    {{-- @foreach ($koleksinya->skip(1) as $koleksi) --}}
                    <div class="carousel-item">
                        {{-- <img src="{{ asset('storage/'.$koleksi->filename) }}" class="d-block w-100" alt="...">
                        --}}
                    <img src="/images/home-screen/berita.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/home-screen/w01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/home-screen/h1c.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/home-screen/h2b.jpeg" class="d-block w-100" alt="...">
                    </div>
                    {{-- @endforeach --}}
                    {{-- @endif --}}
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                    data-slide="prev" style="border: none;background: none;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="cursor: pointer;"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                    data-slide="next" style="border: none;background: none;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="cursor: pointer;"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
    {{-- /GAMBAR GEDE --}}

    {{-- menu --}}


    @include('partials.menu')


    {{-- javascript --}}
    <script src="js/home-screen.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imageMapResizer.min.js"></script>
    <script type="text/javascript">
        $('map').imageMapResize();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
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
</body>

</html>
