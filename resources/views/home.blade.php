@extends('layouts.main')

{{-- cuaca --}}
@section('cuaca')

{{-- @dd($foto[0][0]->filename) --}}
{{-- @dd($foto) --}}
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
@endsection

{{-- detil wisata peta --}}
@section('peta-detail')
    <div id="Div0">
        <img src="images/home-screen/clicking.png">
        <center>
            <p>Klik peta untuk menampilkan lokasi wisata kecamatan</p>
        </center>
    </div>
    <div id="Div1" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Tapos</h4>
            </div>
            <ul>
                @foreach ($tapos as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div2" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Cilodong</h4>
            </div>
            <ul>
                @foreach ($cilodong as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div3" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Cipayung</h4>
            </div>
            <ul>
                @foreach ($cipayung as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div4" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Sawangan</h4>
            </div>
            <ul>
                @foreach ($sawangan as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div5" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Bojongsari</h4>
            </div>
            <ul>
                @foreach ($bojongsari as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div6" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Sukmajaya</h4>
            </div>
            <ul>
                @foreach ($sukmajaya as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div7" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Pancoranmas</h4>
            </div>
            <ul>
                @foreach ($pancoranmas as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div8" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Cimanggis</h4>
            </div>
            <ul>
                @foreach ($cimanggis as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div9" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Beji</h4>
            </div>
            <ul>
                @foreach ($beji as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div10" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Limo</h4>
            </div>
            <ul>
                @foreach ($limo as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="Div11" style="display: none;">
        <div class="wisata-kecamatan flex">
            <div>
                <h4>Cinere</h4>
            </div>
            <ul>
                @foreach ($cinere as $data)
                <li>{{ $data->nama }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
