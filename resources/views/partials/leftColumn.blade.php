<div class="column flex">
    {{-- sambutan --}}
    <div class="sambutan-frame">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/home-screen/video.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/home-screen/video.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/home-screen/video.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    {{-- cuaca --}}
    <div class="cuaca-frame flex">
        <div class="cuaca">
            <?php
            $city_name = 'Depok';
            $api_key = 'baf203be46efb79bfadbcd96c9e58ecd';
            $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
            $weather_data = json_decode( file_get_contents($api_url), true);
            $temperature = $weather_data['main']['temp'];
            $temperature_in_celc = $temperature - 273.15;
            $temperature_c_w_icon = $weather_data['weather'][0]['icon'];
            echo "<img src='http://openweathermap.org/img/wn/".$temperature_c_w_icon."@2x.png' style='width: 100px' />";
            echo "<div>";
            echo "<h3 id='jam'></h3>";
            echo "<h2>";
            echo round ($temperature_in_celc).'℃';
            echo "</h2>";
            echo "</div>";
            ?>
        </div>
        <div class="waktu">
            <h3 id="date"></h3>
        </div>
    </div>
</div>
