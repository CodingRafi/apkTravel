{{-- @dd($data) --}}

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
    
            <h2>Profil Wisata</h2>
            <div class="detail-columns flex">
                @if (count($foto) > 0)   
                <div class="sticky-container">
                    <img src="{{asset("storage/".$foto[0]->filename)}}" alt="feature image" class="sticky-item">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Wisata</th>
                                <td>{{$data[0]->nama}}</td>
                            </tr>
                            <tr>
                                <th scope="row">No. Telp</th>
                                <td>{{$data[0]->no_telp}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{!! $data[0]->alamat !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">Pengelola</th>
                                <td>{!! $data[0]->pengelola !!}</td>
                            </tr>
                            <tr>
                                <th scope="row">Instagram</th>
                                <td>{{$data[0]->instagram}}</td>
                            </tr>
                            <tr>
                                <th scope="row">youtube</th>
                                <td>{{$data[0]->youtube}}</td>
                            </tr>
                            <tr>
                                <th scope="row">twitter</th>
                                <td>{{$data[0]->twitter}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Facebook</th>
                                <td>{{$data[0]->facebook}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Whatsapp</th>
                                <td>{{$data[0]->whatsapp}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Website</th>
                                <td>{{$data[0]->website}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="berita-header">
                        <h2>{{ $data[0]->nama }}</h2>
                        <pre>posted on 9 hours ago</pre>
                    </div>
                    {!! $data[0]->deskripsi !!}
                </div>
            </div>
            {{-- {{dd($data[0])}} --}}

            @for ($i = 0; $i < count($koleksis); $i++)
            
                
            @if ($koleksis[$i]->jenis == 'koleksifoto')
            <div class="gallery-frame">
                <h2>Gallery foto</h2>
                <div class="gallery-scroll flex">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/h1c.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/h2b.jpeg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                </div>
            </div>
            @else
            <div class="gallery-frame">
                <h2>Gallery video</h2>
                <div class="gallery-scroll flex">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                    <img src="/images/home-screen/berita.jpg">
                </div>
            </div>
            @endif  
            @endfor
            
        @endif
    </div>
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
</body>

</html>
