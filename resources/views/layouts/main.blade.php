<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">

    <title>Kota Depok</title>
</head>

<body>
    {{-- @yield('container') --}}

    <header>
        <div class="logo-frame">
          <h1>Kota Depok</h1>
        </div>
        <div class="running">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, autem praesentium! A, quaerat iure. Incidunt
              possimus odit doloremque molestias libero.</p>
        </div>
    </header>

    <div class="grid-home">
        <div class="grid-home-sambutan">
            <img src="images/home-screen/video.jpg">
        </div>
        <div class="grid-home-peta">
          <h1>Peta Kota Depok</h1>
          <img src="images/home-screen/w01.jpg">
        </div>
        <div class="grid-home-berita">
          <h1>Berita</h1>
          <div class="berita-item">
            <img src="images/home-screen/berita.jpg">
            <div>
              <h1>Komunitas Bank Sampah Kecamatan</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ducimus unde quasi atque saepe minus doloribus rerum soluta mollitia ullam.</p>
            </div>
          </div>
          <div class="berita-item">
            <img src="images/home-screen/berita.jpg">
            <div>
              <h1>Komunitas Bank Sampah Kecamatan</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ducimus unde quasi atque saepe minus doloribus rerum soluta mollitia ullam.</p>
            </div>
          </div>
          <div class="berita-item">
            <img src="images/home-screen/berita.jpg">
            <div>
              <h1>Komunitas Bank Sampah Kecamatan</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ducimus unde quasi atque saepe minus doloribus rerum soluta mollitia ullam.</p>
            </div>
          </div>
        </div>
        <div class="grid-home-cuaca">
          <h1>07:30</h1>
          <p>22 Desember 2021</p>
          <h1>20°C</h1>
          <img src="images/home-screen/rainy-day.png">
        </div>
        <div class="grid-home-kontak">
          <h1>Contact Center</h1>
          <h1>021 - 8212 - 210</h1>
          <h1>Customer Center</h1>
          <h1>021 - 8212 - 210</h1>
        </div>
    </div>
    <div class="menu">
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/hotel">Hotel</a></li>
        <li><a href="/destinasi">Destinasi</a></li>
        <li><a href="/makanan">Makanan</a></li>
        <li><a href="/travel">Travel</a></li>
        <li><a href="/ekraf">Ekraf</a></li>
      </ul>
    </div>



    {{-- <div class="footer">
      <ul>
        <li><a href="/home">home</a></li>
        <li><a href="/hotel">hotel</a></li>
        <li><a href="/destinasi">destinasi</a></li>
        <li><a href="/makanan">makanan</a></li>
        <li><a href="/travel">travel</a></li>
        <li><a href="/ekraf">ekraf</a></li>
      </ul>
    </div> --}}
</body>

</html>
