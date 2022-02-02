{{-- @dd($urlBack) --}}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <title>Kota Depok</title>
</head>

<body>
    {{-- Topbar --}}


    @include('partials.topbar')

    {{-- Konten --}}
    <div class="main detail">
        <h2>Profil Wisata</h2>
        <div class="detail-columns flex">
            <div class="detail-columns-left">
                @if (count($foto) > 0)
                <img src="{{asset("storage/".$foto[0]->filename)}}" alt="feature image" class="sticky-item">
                @endif
                {{-- <img src="../images/home-screen/depok-map-select.jpg" alt=""> --}}
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
                        @isset($data[0]->instagram)      
                        <tr>
                            <th scope="row">Instagram</th>
                            <td>{{$data[0]->instagram}}</td>
                        </tr>
                        @endisset
                        @isset($data[0]->youtube)    
                        <tr>
                            <th scope="row">youtube</th>
                            <td>{{$data[0]->youtube}}</td>
                        </tr>
                        @endisset
                        @isset($data[0]->twitter) 
                        <tr>
                            <th scope="row">twitter</th>
                            <td>{{$data[0]->twitter}}</td>
                        </tr>
                        @endisset
                        @isset($data[0]->facebook)  
                        <tr>
                            <th scope="row">Facebook</th>
                            <td>{{$data[0]->facebook}}</td>
                        </tr>
                        @endisset
                        @isset($data[0]->whatsapp) 
                        <tr>
                            <th scope="row">Whatsapp</th>
                            <td>{{$data[0]->whatsapp}}</td>
                        </tr>
                        @endisset
                        @isset($data[0]->website)  
                        <tr>
                            <th scope="row">Website</th>
                            <td>{{$data[0]->website}}</td>
                        </tr>
                        @endisset
                    </tbody>
                </table>
            </div>
            <div class="detail-columns-right">
                <div class="berita-header">
                    <h2>{{ $data[0]->nama }}</h2>
                    <pre>posted on 9 hours ago</pre>
                </div>
                {!! $data[0]->deskripsi !!}
                <a href="/{{ $urlBack }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        {{-- GALLERY FOTO & VIDEO --}}

        @if (count($koleksis) > 0)
        @if ($koleksiFoto)
       {{-- {{ dd($koleksiFoto)}} --}}
        <div class="gallery-frame">
            <h2>Gallery foto</h2>
            <div class="gallery-scroll flex">
                @foreach ($koleksiFoto as $item)
                    @for ($i = 0; $i < count($koleksiFoto[0]->foto); $i++)
                    {{-- {{ dd(count($koleksiFoto[0]->foto)) }} --}}
                    <a href="{{ asset('storage/'. $koleksiFoto[0]->foto[$i]->filename) }}" class="fancybox" data-fancybox="gallery1">
                        <img id="video{{$koleksiFoto[0]->foto[$i]->id}}" src="{{ asset('storage/'. $koleksiFoto[0]->foto[$i]->filename) }}">
                        <h5 class="card-title" for="foto{{$koleksiFoto[0]->foto[$i]->id}}">Foto {{ $i+1 }}</h5>
                    </a>
                
                    
                    @endfor
                @endforeach
            </div>
        </div>
        @else
       
        <div class="gallery-frame">
            <h2>Gallery video</h2>
            <div class="gallery-scroll flex">
                @for ($i = 0; $i < count($koleksiVideo[0]->video); $i++)
                
                {{-- {{$koleksiVideo[$i]}} --}}
                   
                    <a href="{{ asset('storage/'.$koleksiVideo[0]->video[$i]->filename) }}" class="fancybox" data-fancybox="gallery2">
                        <video id="video{{$koleksiVideo[0]->video[$i]->id}}" src="{{ asset('storage/'.$koleksiVideo[0]->video[$i]->filename) }}" autoplay="false"></video>
                        <h5 class="card-title" for="video{{$koleksiVideo[0]->video[$i]->id}}">Video {{ $i+1 }}</h5>
                    </a>
                    
                 
                {{-- <a href="{{ asset('storage/'. $koleksiVideo[$i][0]->filename) }}" class="fancybox" data-fancybox="gallery2">
                    <video src="{{ asset('storage/'. $koleksiVideo[$i][0]->filename) }}" autoplay="false"></video>
                    
                </a> --}}
                @endfor
                
            </div>
        </div>
        @endif
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>

</html>
