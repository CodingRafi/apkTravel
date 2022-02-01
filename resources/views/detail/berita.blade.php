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
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.css" integrity="sha512-JP49dvydjvdq6qd31grbdqIeExUyLFFIIneoetY/cJ+eQeJ6ok5HhaM4kQfIeQV4maAMGQ5kf4In3T7VKwMufg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            @if (count($foto) > 0)
            <div class="detail-columns-left">
                <img src="{{asset("storage/".$foto[0]->filename)}}" alt="feature image" class="sticky-item">
            </div>
            @else 
            <div class="detail-columns-left">
                <img src="../images/home-screen/depok-map-select.jpg" alt="">
            </div>
            @endif

            @endif
            
            <div class="detail-columns-right">
                <div class="berita-header">
                    <h2>{{$data[0]->judul}}</h2>
                    <pre>Tanggal posting {{$data[0]->created_at}}</pre>
                </div>
                <p>{!! $data[0]->body !!}</p>
            </div>
        </div>

        {{-- GALLERY FOTO & VIDEO --}}

        {{-- <div class="gallery-frame">
            <h2>Gallery foto</h2>
            <div class="gallery-scroll flex">

                <a href="/images/home-screen/berita.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="/images/home-screen/berita.jpg">
                </a>
                
                <a href="/images/welcome-screen/covervid.mp4" class="fancybox" data-fancybox="gallery2">
                    <video src="/images/welcome-screen/covervid.mp4"></video>
                </a>

            </div>
        </div> --}}

        @if (count($koleksiFoto) > 0)
        <div class="gallery-frame">
            <h2>Gallery foto</h2>
            <div class="gallery-scroll flex">
                @foreach ($koleksiFoto as $item)
                <a href="{{ asset('storage/'. $fotos[0]['fotoAda'][0]->filename) }}" class="fancybox" data-fancybox="gallery1">
                    <img src="{{ asset('storage/'. $fotos[0]['fotoAda'][0]->filename) }}">
                </a>
                @endforeach
            </div>
        </div>
        @endif
        @if (count($koleksiVideo) > 0)
        <div class="gallery-frame">
            <h2>Gallery video</h2>
            <div class="gallery-scroll flex">
                @foreach ($koleksiVideo as $item)
                <a href="{{ asset('storage/'. $fotos[0]['fotoAda'][0]->filename) }}" class="fancybox" data-fancybox="gallery2">
                    <video src="{{ asset('storage/'. $videos[0]['videoAda'][0]->filename) }}" autoplay="false"></video>
                </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- INI KEPAKE FI??? --}}
        @else
        <h2>Profil Wisata</h2>
        <div class="detail-columns flex">
            <div class="detail-columns-left">
                @if (count($foto) > 0)
                <img src="{{$foto[0]->filename}}" alt="feature image">
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

            <div class="detail-columns-right">
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

            {{-- GALLERY FOTO & VIDEO --}}

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
            @if (count($kozleksiVideo) > 0)
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


        {{-- menu --}}


        @include('partials.menu')


        {{-- javascript --}}
        <script src="js/home-screen.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>

</html>
