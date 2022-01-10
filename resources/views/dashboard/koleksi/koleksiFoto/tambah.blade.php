@extends('dashboard.layouts.main1')

@section('container')
    
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Uploads foto</h5>
                            </div>
                            <div class="card-block">
                                <form action="/dashboard/foto" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto </label>
                                        <div class="col-sm-10">
                                            @isset($slug)
                                                <input type="hidden" name="slug" value="{{ $slug }}">
                                            @endisset
                                            <div class="mb-3 col-sm-5 border container-previewFotVid">
                                                <span class="col-sm-2 col-form-label previewFotVid m-0 p-0" style="color: #000"></span>
                                            </div>
                                            <div class="container2Prev">
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                            </div>
                                            <input type="hidden" value="{{ $kategori }}" name="kategori">
                                            <input type="file" class="form-control @error('filename') is-invalid @enderror filename" name="filename[]" id="filename" onchange="previewImage()" multiple accept="image/*">
                                            @error('filename')   
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="container-fluid d-flex p-0" style="justify-content: flex-end">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Basic Form Inputs card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
</div>

<script type="text/javascript" src="/js/jquery/jquery.min.js "></script>
<script>

function previewImage(){

        let countFiles = $('.filename')[0].files.length
        let imgPath = $('.filename')[0].value
        let extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        let image_holder = $('.container2Prev');
        image_holder.empty();

        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
         if (typeof (FileReader) != "undefined") {

             for (var i = 0; i < countFiles; i++) {
 
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                         "src": e.target.result,
                             "class": "imagePreview"
                     }).appendTo(image_holder);
                 }
 
                 image_holder.show();
                 reader.readAsDataURL($('.filename')[0].files[i]);
             }
 
         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         alert("Pls select only images");
     }

        // const oFReader = new FileReader();
        // oFReader.readAsDataURL(filename.files[0]);

        // oFReader.onload = function(oFREvnet){
        //     let data = oFReader.result;
        //     imgPreview.style.display = "block";
        //     containerPreviewFotVid.style.display = 'block';
        //     previewFotVid.innerHTML = 'Yang akan di upload : Foto'
        //     imgPreview.src = oFREvnet.target.result;
        // };
    }

</script>

@endsection