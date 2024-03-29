@extends('layouts.welcome')

@section('container')

<style></style>
<div class="cover">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            {{-- @foreach ($video as $item)
            <div class="carousel-item active">
                <source src="{{ asset("storage/".$item->filename) }}" type="video/webm">
                <video id="myVideo" class="d-block w-100" autoplay muted loop>
                    <source src="{{ asset("storage/".$item->filename) }}" type="video/mp4">
                </video>
            </div>
            @endforeach --}}
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="images/welcome-screen/covervid.mp4" type="video/mp4">
                </video>
            </div>
            <div class="carousel-item">
                <img src="images/home-screen/w01.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="flex-welcome pt-2">
        <div class="logo">
            <img src="images/home-screen/logo-depok.png">
            <div class="flex">
                <img src="images/welcome-screen/Smiling-west-java.png">
                <img src="images/welcome-screen/logo-pesona-indonesia.png">
            </div>
        </div>
        <div class="welcome">
            <h1>SELAMAT DATANG DI KOTA DEPOK</h1>
            <p>Nikmati wisata & kuliner yang tidak tergantikan</p>
            <a href="/home"><button>Jelajahi Lebih Lanjut</button></a>
            <br>
            <br>
            <audio id="myAudio" controls >
                {{-- <source src="{{ asset("storage/".$item->filename) }}" type="audio/mpeg"> --}}
            Your browser does not support the audio element.
            </audio> 
            <br>
            <p style="color:rgb(250, 203, 203)" id='myInfo' >* Tekan Dimana saja di layar Untuk Mendengarkan Background Music </p>
        </div>
    </div>
</div>

<script>
function isPlaying(audio){ return true}
function playAudioku(){
     var aud = document.getElementById("myAudio");
      aud.play();
      if(isPlaying(aud)==true){
        $('#myInfo').text("Anda memilih menggunakan music pada video");
      }else{
        $('#myInfo').text("* Refresh dan Tekan Dimana saja di layar Untuk Mendengarkan Background Music");
      }
         

}

var vid = document.getElementById("myVideo");
vid.onplay = function() {
   // alert("The video has started to play");
   playAudioku();
};
</script>
@endsection
