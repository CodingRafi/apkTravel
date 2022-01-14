<div class="column sub flex">
    @foreach ($categories as $data)
        <div class="card bg-dark text-white">
            <img src="images/home-screen/h1c.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $data->nama }}</h5>
                <p class="card-text">{{ $data->alamat }}</p>
            </div>
        </div>
    @endforeach
    
</div>