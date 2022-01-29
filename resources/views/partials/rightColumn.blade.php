

<div class="column flex" >
    {{-- berita --}}
    {{-- <div class="header">
       
    </div> --}}
    <div class="berita-frame" >
        <h4 class="header">Wisata Kota Depok</h4>
        @if (count($wisatas) <= 10)
          @for ($i = 0; $i < count($wisatas); $i++)
            <ul class="list-group">
              <a href="show/{{ $wisatas[$i]->slug }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div class="flex-column">
                  <span class="badge badge-info badge-pill">{{$i+1}}</span>
                  {{ $wisatas[$i]->nama }}
                </div>
                <div class="image-parent">
                    @if (count($fotos[$i]) > 0)
                        <img src="{{ asset("storage/".$fotos[$i][0]->filename) }}" class="img-fluid" alt="quixote">
                    @else
                        <img src="/images/home-screen/berita.jpg" class="img-fluid" alt="quixote">  
                    @endif
                </div>
              </a>
            </ul>
          @endfor
        @else
          @for ($i = 0; $i < $jumlah; $i++)
          <div class="card mb-3" style="max-width: 540px;">
              <a href="show/{{ $wisatas[$i]->slug }}" style="color: #000;text-decoration: none;">   
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      @if (count($fotos[$i]) > 0)
                      <img src="{{ asset("storage/".$fotos[$i][0]->filename) }}" class="card-img-top" alt="..." style="margin-top: 3px;">
                      @else
                          <img src="/images/home-screen/berita.jpg" class="card-img-top" alt="..." style="margin-top: 3px;">    
                      @endif
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{ $wisatas[$i]->nama }}</h5>
                      </div>
                    </div>
                  </div>
              </a>
            </div>

          @endfor
        @endif

        
        {{-- @for ($i = 0; $i < count($wisatas); $i++)
            <div class="card mb-3" style="max-width: 540px;">
                <a href="show/{{ $wisatas[$i]->slug }}" style="color: #000;text-decoration: none;">   
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        @if (count($fotos[$i]) > 0)
                        <img src="{{ asset("storage/".$fotos[$i][0]->filename) }}" class="card-img-top" alt="..." style="margin-top: 3px;">
                        @else
                            <img src="/images/home-screen/berita.jpg" class="card-img-top" alt="..." style="margin-top: 3px;">    
                        @endif
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $wisatas[$i]->nama }}</h5>
                        </div>
                      </div>
                    </div>
                </a>
              </div>
        @endfor --}}
        <div class="footer">
          <button type="button" class="btn btn-primary loadMore">Load More....</button>
        </div>
    </div>
    
</div>

      