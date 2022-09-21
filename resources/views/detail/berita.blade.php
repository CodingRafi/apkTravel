@extends('main')

@section('content')

<div class="container-fluid p-0 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="main detail d-flex justify-content-center align-items-center">
            <div class="card" style="max-height: 75vh;overflow: auto;">
                <div class="card-body">
                    @if ($data[0]->category_id >= 10)
                    <h2>{{ $data[0]->category->nama }}</h2>
                    <div class="detail-columns flex">
                        @if (count($foto) > 0)
                        <div class="detail-columns-left">
                            <img src="{{asset("storage/".$foto[0]->filename)}}" alt="feature image" class="sticky-item" style="width: 100%;">
                        </div>
                        @else 
                        <div class="detail-columns-left">
                            <img src="../images/home-screen/depok-map-select.jpg" alt="">
                        </div>
                        @endif
                
                        @endif
                        
                        <div class="detail-columns-right">
                            <div class="berita-header">
                                <h2 class="mt-3">{{$data[0]->judul}}</h2>
                                <pre>Tanggal posting {{$data[0]->created_at}}</pre>
                            </div>
                            <p>{!! $data[0]->body !!}</p>
                        </div>
                    </div>
                
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
