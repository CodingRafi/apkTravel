<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
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
                                  <img src="/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                  <span>John Doe</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="auth-normal-sign-in.html">
                                          <i class="ti-layout-sidebar-left"></i> Logout
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

                  @yield('container')

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

    <!-- slimscroll js -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="/js/pcoded.min.js"></script>
    <script src="/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="/js/script.js "></script>

    <script>
        if($(".fixed-button")){
            $(".fixed-button").css("display", "none");
        }
    </script>
</body>

</html>

