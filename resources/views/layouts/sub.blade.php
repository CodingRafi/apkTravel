<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.css" integrity="sha512-JP49dvydjvdq6qd31grbdqIeExUyLFFIIneoetY/cJ+eQeJ6ok5HhaM4kQfIeQV4maAMGQ5kf4In3T7VKwMufg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Kota Depok</title>
</head>
<body>
    {{-- Topbar --}}
    @include('partials.topbar')

    {{-- Konten --}}
    <div class="main flex">
        {{-- kolum sub --}}
        @include('partials.subColumn')

        {{-- kolum kanan --}}
        @include('partials.rightColumn')
        
    </div>

    {{-- menu --}}
    @include('partials.menu')

    {{-- javascript --}}
    <script src="js/home-screen.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imageMapResizer.min.js"></script>
    <script type="text/javascript">
        $('map').imageMapResize();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

<script>
    const loadMore = document.querySelector('.loadMore');
    const bungcon12 = document.querySelector('.bungcon12');
    let jumlah = 10;
    loadMore.addEventListener('click', function(){
        let penjumlahan = parseInt(jumlah)+10;
        jumlah = penjumlahan;
        fetch('load-more?jumlah='+ penjumlahan)
        .then(response => response.json())
        .then(data => {
            bungcon12.innerHTML = '';
            data['fotos'].forEach((e,i) => {
                if(e.length > 0){
                    bungcon12.innerHTML += `
                    <ul class="list-group">
                        <a href="show/${data['wisatas'][i]['slug']}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                            <span class="badge badge-info badge-pill">${i+1}</span>
                            ${data['wisatas'][i]['nama']}
                        </div>
                        <div class="image-parent">
                            <img src="${'storage/'+e[0].filename}" class="img-fluid" alt="quixote">
                        </div>
                        </a>
                    </ul>
                    `;
                }else{
                bungcon12.innerHTML += `
                <ul class="list-group">
                    <a href="show/${data['wisatas'][i]['slug']}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div class="flex-column">
                        <span class="badge badge-info badge-pill">${i+1}</span>
                        ${data['wisatas'][i]['nama']}
                    </div>
                    <div class="image-parent">
                        <img src="/images/home-screen/berita.jpg" class="img-fluid" alt="quixote">  
                    </div>
                    </a>
                </ul>
                `;
                }
            });
        })
    })
</script>
</body>

</html>
