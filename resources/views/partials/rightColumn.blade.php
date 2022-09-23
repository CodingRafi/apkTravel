<div class="col-md-3">
  <div class="card bg-light bg-grandient border-0 shadow h-100">
      <div class="card-body">
          <h5 class="card-title">Wisata Kota Depok</h5>
          <hr>
          @if(count($wisatas) <= 10)
          <ol class="list-group list-group bungcon12" style="overflow: auto !important; height: 500px !important;">
              @for($i = 0; $i < count($wisatas); $i++)
              <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                      <a class="fw-bold d-block text-decoration-none text-dark"
                          href="show/{{ $wisatas[$i]->slug }}">{{ $wisatas[$i]->nama }}</a>
                      {{ $wisatas[$i]->jenis }}
                  </div>
                  <span class="badge text-dark @if($i==0) bg-warning @elseif ($i == 1) bg-secondary bg-opacity-50 @else bg-light @endif rounded-pill">{{ $i+1 }}</span>
              </li>
              @endfor
          </ol>
          @else
          <ol class="list-group list-group bungcon12" style="overflow: auto !important; height: 500px !important;">
              @for($i = 0; $i < $jumlah; $i++)
              <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                      <a class="fw-bold d-block text-decoration-none text-dark"
                          href="show/{{ $wisatas[$i]->slug }}">{{ $wisatas[$i]->nama }}</a>
                      {{ $wisatas[$i]->jenis }}
                  </div>
                  <span class="badge text-dark @if($i==0) bg-warning @elseif ($i == 1) bg-secondary bg-opacity-50 @else bg-light @endif rounded-pill">{{ $i+1 }}</span>
              </li>
              @endfor
          </ol>
          @endif
          <a href="/destinasi/show" class="btn btn-primary w-100 mt-2">Lainnya</a>
      </div>
      <button type="button" class="btn btn-download-mobile-app" data-bs-toggle="modal" data-bs-target="#modalApp" style="border: none;">
          <img src="/images/unknown.png" alt="" style="width: 100%;">
      </button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalApp" tabindex="-1" aria-labelledby="modalAppLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="modalAppLabel">Download Mobile App</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row align-items-center justify-content-center">
              <img src="/images/qrcode-1663598215.png" alt="" style="width: 15rem;">
          </div>
          <h4 class="text-center mt-3">Silahkan scan menggunakan handphone anda</h4>
      </div>
      </div>
  </div>
  </div>
