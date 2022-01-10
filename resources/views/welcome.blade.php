@extends('layouts.welcome')

@section('container')
<div class="cover">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/home-screen/w01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/home-screen/w01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/home-screen/w01.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="flex-welcome">
        <div class="logo">
            <img src="images/home-screen/logo-depok.png">
        </div>
        <div class="welcome">
            <h1>SELAMAT DATANG DI KOTA DEPOK</h1>
            <p>Nikmati wisata & kuliner yang tidak tergantikan</p>
            <a href="/home"><button>Jelajahi Lebih Lanjut</button></a>
        </div>
    </div>
</div>
@endsection
