<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kota Depok</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    @yield('tambahcss')

    <style>
        * {
            font-family: 'Nunito';
        }

        body {
            overflow: overlay;
        }

        body::-webkit-scrollbar {
            width: 20px;
        }

        body::-webkit-scrollbar-track {
            background-color: transparent;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #ffffff91;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        body::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }

        nav.fixed-bottom span.text-dark {
                display: none;
        }

        @media (min-width: 768px) {
            nav .col-md-auto.bg-light.bg-gradient.shadow.position-absolute.d-flex.align-items-center {
                border-radius: 0 0 100px 0 !important;
            }

            nav.navbar.fixed-bottom.bg-light.bg-gradient.shadow {
                border-radius: 30% 30% 0 0 !important;
            }

            nav.fixed-bottom span.text-dark {
                display: inline;
            }

            nav .accordion {
                width: 75% !important;
            }

            .container .col-md-6 hr {
                display: none !important;
            }
        }
        
        @media (max-width:481px){
            .btn-download-mobile-app{
                display: none !important;
            }
        }

    </style>
</head>

<body
    style="min-height: 100vh; background-image: url(/images/home-screen/background.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">

    <!-- ========================================================= NAVBAR ========================================================= -->
    @include('partials.topbar')
    <!-- ========================================================= /NAVBAR ========================================================= -->
    
    @yield('content')
    
    <!-- ========================================================= MENU ========================================================= -->
    @include('partials.menu')
    <!-- ========================================================= /MENU ========================================================= -->

    <!-- ========================================================= SCRIPT ========================================================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.js"
        integrity="sha512-cpMx2tMC8g9QilwXFVFqVT5TWkvfq/xEaOspfF1FUUUJy5mL6As50+uh3yOoVlu1bKwsJrUthuEzC1m6WquRKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('tambahjs')
    <!-- ========================================================= /SCRIPT ========================================================= -->
</body>

</html>
