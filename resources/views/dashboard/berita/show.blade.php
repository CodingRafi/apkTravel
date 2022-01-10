@extends('dashboard.layouts.main1')

@section('container')

<style>
    b, strong {
        font-weight: 700;
    }
</style>
    
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">

                    <!-- Project statustic start -->
                    <div class="col-xl-12">
                        <div class="card proj-progress-card">
                            <div class="card-block">
                              
                                <h4 style="font-size: 20px;">{{ $berita->judul }}</h3>
                                
                                @if (count($foto) > 0)
                                <div style="overflow: hidden;" class="container-gambar-berita">
                                    <img src="{{ asset('storage/' . $foto[0]->filename) }}" class="card-img-top img-fluid mt-3">
                                </div>                                 
                                @elseif(count($video) > 0)
                                    <video width="400" controls autoplay>
                                        <source class="video-preview img-fluid col-sm-5" src="{{ asset('storage/' . $video[0]->filename) }}" type="video/{{ explode('.', explode('/', $video[0]->filename)[1])[1] }}">
                                    </video>
                                @endif

                                <article class="my-3 fs-5">
                                    {!! $berita->body !!}
                                </article>

                                <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                    <a href="/dashboard/{{ $urlBack }}" class="btn btn-success">Back to home</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Project statustic end -->
                </div>
            </div>
            <!-- Page-body end -->
        </div>
        <div id="styleSelector"> </div>
    </div>
</div>

@endsection