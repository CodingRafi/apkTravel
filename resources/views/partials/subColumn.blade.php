<div class="column sub flex">
    @foreach ($wibowo as $data)
        <div class="card bg-dark text-white">
            <a href="show/{{ $data->slug }}">
                <img src="images/home-screen/h1c.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ $data->nama }}</h5>
                    <p class="card-text">{{ $data->alamat }}</p>
                </div>
            </a>
        </div>
    @endforeach

</div>