<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ? 'Tambah '. $title : $title }}{{ Request::is('dashboard/destinasi/create') ? 'Tambah Destinasi' : "" }}{{ Request::is('dashboard/makanan/create') ? 'Tambah Makanan' : "" }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/css/tambahan.css">
    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix/trix.css">
    <script type="text/javascript" src="/js/trix/trix.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script> --}}
    {{-- loading --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }

        .video-preview{
            display: none;
        }

        .foto-preview{
            display: none;
        }

        .container-previewFotVid{
            display: none;
        }
    </style>
</head>

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="/dashboard">
                          <img class="img-fluid" src="/images/lambang.png" alt="Theme-Logo" style="width: 8rem"/>
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <span>{{ auth()->user()->username }}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <form action="/logout" method="post">
                                          @csrf
                                          <button type="submit" class="dropdown-item d-flex btn p-0" style="align-items: center;"><svg style="transform: rotate(180deg)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span style="font-size: 20px;margin-left: 10px;">Logout</span></button>
                                      </form>
                                      <a href="auth-normal-sign-in.html">
                                          
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">

                    
                
                  @include('dashboard.partials.navbar')

                  <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">
                                            {{ Request::is('dashboard/profil-wisata/{profil_wisatum:slugrit}/edit') ? 'Edit '.$title : '' }}
                                           {{ (Request::is('dashboard/hotel/create') || Request::is('dashboard/travel/create') || Request::is('dashboard/oleh-oleh/create')) ? 'Tambah '. $title : $title }}
                                           {{ Request::is('dashboard/destinasi/create') ? 'Tambah Destinasi' : "" }}
                                           {{ Request::is('dashboard/makanan/create') ? 'Tambah Makanan' : "" }}
                                        </h5>
                                        <p class="m-b-0">Welcome to Kota Depok</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                        </li>
                                        @if ($title != "Dashboard")
                                            <li class="breadcrumb-item"><a href="#!">{{ $title }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    @yield('container')
                </div>

              </div>
          </div>
      </div>
  </div>

    
    <script type="text/javascript" src="/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- waves js -->
    <script src="/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="/js/pcoded.min.js"></script>
    <script src="/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="/js/script.js "></script>
    <script src="/tinymce/tinymce.min.js"></script>

    <script>
        if($(".fixed-button")){
            $(".fixed-button").css("display", "none");
        }
        
        document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
        })

        tinymce.init({
            selector:'textarea',
            branding: false
        });

        

        // $(document).ready(function() {
        //     CKEDITOR.config.removePlugins = 'image,about,elementspath';
        // });
    </script>

    
</body>

</html>

