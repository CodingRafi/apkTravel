<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/tambahan.css">
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
                            <img class="img-fluid" src="images/lambang.png" alt="Theme-Logo" style="width: 8rem"/>
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
                                    <img src="images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
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
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="/dashboard" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Mengelola</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                                        <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">
                                           
                                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                           <path d="M2140 4960 l0 -160 -320 0 -320 0 0 -954 0 -955 88 -56 c106 -70 268
                                           -230 337 -335 173 -266 237 -571 179 -855 -56 -268 -231 -662 -520 -1167 l-84
                                           -146 0 -146 0 -146 825 0 825 0 0 485 0 486 158 -3 157 -3 3 -482 2 -483 810
                                           0 810 0 0 2380 0 2380 -317 2 -318 3 -3 158 -3 157 -1154 0 -1155 0 0 -160z
                                           m1010 -760 l0 -180 160 0 160 0 0 180 0 180 155 0 155 0 0 -525 0 -525 -155 0
                                           -155 0 0 185 0 185 -160 0 -160 0 0 -185 0 -186 -157 3 -158 3 -3 523 -2 522
                                           160 0 160 0 0 -180z m-320 -1449 l0 -159 -138 -1 c-76 -1 -146 1 -155 5 -15 5
                                           -17 25 -17 160 l0 154 155 0 155 0 0 -159z m638 2 l-3 -158 -155 0 -155 0 -3
                                           158 -3 157 161 0 161 0 -3 -157z m630 0 l-3 -158 -155 0 -155 0 -3 158 -3 157
                                           161 0 161 0 -3 -157z m-1268 -618 l0 -155 -155 0 -155 0 0 155 0 155 155 0
                                           155 0 0 -155z m640 0 l0 -155 -160 0 -160 0 0 155 0 155 160 0 160 0 0 -155z
                                           m630 0 l0 -155 -160 0 -160 0 0 155 0 155 160 0 160 0 0 -155z m-1270 -630 l0
                                           -155 -155 0 -155 0 0 155 0 155 155 0 155 0 0 -155z m640 0 l0 -155 -160 0
                                           -160 0 0 155 0 155 160 0 160 0 0 -155z m630 0 l0 -155 -160 0 -160 0 0 155 0
                                           155 160 0 160 0 0 -155z"/>
                                           <path d="M765 2706 c-488 -96 -815 -571 -706 -1028 72 -303 328 -814 744
                                           -1486 l120 -193 50 78 c299 466 605 1029 730 1343 85 212 100 278 101 425 1
                                           143 -9 197 -57 315 -106 259 -314 446 -582 525 -111 33 -291 42 -400 21z m341
                                           -320 c281 -89 451 -386 390 -677 -45 -211 -214 -388 -426 -444 -73 -19 -217
                                           -19 -294 1 -161 42 -304 158 -374 305 -47 98 -62 162 -62 262 1 238 147 454
                                           371 544 121 49 258 52 395 9z"/>
                                           <path d="M850 2091 c-73 -23 -148 -90 -177 -160 -23 -54 -20 -146 6 -207 44
                                           -101 134 -159 246 -159 58 1 79 6 123 30 94 51 142 132 142 237 0 115 -72 216
                                           -178 252 -48 17 -120 20 -162 7z"/>
                                           </g>
                                           </svg>
                                           <b>BC</b></span>
                                        <span class="pcoded-mtext">Hotel</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Hotel</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tambah Hotel</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                                        <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">
                                           
                                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                           <path d="M818 5019 c-108 -16 -183 -40 -293 -94 -283 -141 -469 -399 -516
                                           -715 -25 -171 10 -402 85 -564 39 -85 759 -1311 789 -1344 14 -15 32 -22 57
                                           -22 25 0 43 7 57 22 26 29 741 1224 787 1316 78 156 112 325 103 516 -7 143
                                           -30 233 -92 361 -177 367 -580 582 -977 524z m224 -480 c195 -41 349 -206 379
                                           -409 14 -91 -4 -201 -48 -289 -43 -86 -136 -174 -229 -218 -73 -35 -87 -38
                                           -184 -41 -88 -3 -116 0 -170 18 -237 79 -379 322 -329 562 26 125 122 259 233
                                           323 99 58 231 78 348 54z"/>
                                           <path d="M865 4226 c-37 -17 -80 -62 -94 -99 -26 -67 2 -167 57 -206 78 -55
                                           169 -46 238 23 68 67 70 162 6 238 -46 55 -138 75 -207 44z"/>
                                           <path d="M3250 3401 c-19 -10 -45 -36 -57 -57 l-23 -39 0 -1065 0 -1065 155 0
                                           155 0 0 268 c0 154 4 267 9 267 24 0 1578 783 1593 803 27 34 41 91 34 132
                                           -16 84 2 75 -912 440 -607 242 -851 335 -880 335 -22 0 -55 -8 -74 -19z"/>
                                           <path d="M1300 2198 l-91 -153 433 -5 c412 -5 435 -6 478 -26 97 -45 156 -146
                                           148 -256 -5 -74 -25 -120 -73 -170 -76 -78 -17 -72 -895 -78 -697 -5 -791 -8
                                           -842 -23 -205 -60 -363 -210 -423 -401 -50 -157 -40 -306 31 -454 52 -108 168
                                           -224 276 -276 142 -68 100 -66 1261 -66 l1048 0 -8 38 c-4 20 -8 90 -8 155 l0
                                           117 -1031 0 c-1149 0 -1090 -3 -1182 70 -73 57 -107 131 -107 230 1 124 60
                                           215 174 269 l56 26 795 5 795 5 65 25 c271 106 426 384 369 662 -31 150 -146
                                           307 -280 381 -125 70 -177 77 -560 77 l-338 0 -91 -152z"/>
                                           <path d="M3213 856 c-104 -34 -194 -114 -241 -214 -24 -50 -27 -69 -27 -162 0
                                           -92 3 -112 26 -160 41 -85 99 -144 187 -187 71 -36 81 -38 166 -37 117 1 184
                                           26 263 97 207 189 157 522 -97 641 -53 25 -80 31 -150 33 -53 2 -101 -2 -127
                                           -11z"/>
                                           </g>
                                           </svg>
                                           
                                           <b>BC</b></span>
                                        <span class="pcoded-mtext">Destinasi</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Destinasi</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tambah Destinasi</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                                        <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">
                                           
                                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            stroke="none">
                                           <path d="M434 5083 c-35 -84 -94 -275 -116 -374 -19 -90 -22 -132 -22 -314 0
                                           -194 2 -217 26 -307 15 -53 42 -132 61 -175 74 -172 77 -175 1086 -1186 l946
                                           -947 121 121 121 120 85 -93 c46 -51 427 -475 845 -943 418 -467 771 -860 784
                                           -871 174 -154 449 -145 615 20 135 136 167 337 82 516 -28 61 -176 211 -2232
                                           2268 l-2201 2202 -92 0 -93 0 -16 -37z"/>
                                           <path d="M3494 4558 c-303 -304 -565 -573 -581 -598 -79 -117 -115 -218 -138
                                           -375 -8 -56 -18 -112 -24 -126 -9 -24 10 -45 334 -369 l343 -343 43 11 c24 6
                                           83 16 130 22 47 5 119 21 159 35 164 56 159 52 779 671 l575 573 -100 100
                                           c-56 56 -105 101 -110 101 -5 0 -190 -181 -411 -402 l-403 -403 -105 105 -105
                                           105 407 407 407 407 -107 108 -108 107 -407 -407 -407 -407 -105 105 -105 105
                                           403 403 c221 221 402 407 402 413 0 12 -196 204 -208 204 -4 0 -255 -249 -558
                                           -552z"/>
                                           <path d="M819 1453 c-694 -696 -747 -752 -773 -810 -114 -263 21 -549 293
                                           -623 58 -15 185 -13 242 4 108 33 120 44 879 802 l745 744 -315 315 c-173 173
                                           -317 315 -320 315 -3 0 -341 -336 -751 -747z"/>
                                           </g>
                                           </svg>
                                           
                                           <b>BC</b></span>
                                        <span class="pcoded-mtext">Makanan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Makanan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tambah Makanan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                                        <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">
                                           
                                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            stroke="none">
                                           <path d="M3217 5109 c-107 -26 -209 -112 -261 -219 l-31 -65 -3 -317 -3 -318
                                           150 0 151 0 0 286 0 286 29 29 29 29 292 0 292 0 29 -29 29 -29 0 -286 0 -286
                                           151 0 150 0 -3 318 -3 317 -31 65 c-39 83 -111 155 -194 194 l-65 31 -335 2
                                           c-184 1 -352 -3 -373 -8z"/>
                                           <path d="M2240 3868 c-38 -15 -74 -40 -117 -83 -52 -53 -64 -72 -82 -131 -21
                                           -69 -21 -70 -19 -1579 l3 -1510 26 -55 c46 -99 122 -165 222 -195 l42 -12 5
                                           -99 c6 -114 22 -150 80 -183 72 -40 157 -16 198 57 18 33 22 55 22 131 l0 91
                                           950 0 950 0 0 -90 c0 -110 18 -154 78 -188 49 -27 91 -28 142 -2 58 29 74 67
                                           80 184 l5 99 42 12 c100 30 176 96 222 195 l26 55 3 1510 c2 1509 2 1510 -19
                                           1579 -18 59 -30 78 -82 131 -45 45 -78 68 -120 83 l-58 22 -1272 -1 c-1269 0
                                           -1272 0 -1327 -21z m611 -401 c74 -49 69 56 69 -1367 0 -1232 -1 -1276 -19
                                           -1317 -22 -47 -79 -83 -132 -83 -46 0 -108 39 -130 82 -18 36 -19 80 -19 1315
                                           0 1197 1 1280 18 1313 25 50 75 80 132 80 32 0 58 -7 81 -23z m1600 0 c74 -49
                                           69 56 69 -1367 0 -1232 -1 -1276 -19 -1317 -22 -47 -79 -83 -132 -83 -46 0
                                           -108 39 -130 82 -18 36 -19 80 -19 1315 0 1197 1 1280 18 1313 25 50 75 80
                                           132 80 32 0 58 -7 81 -23z"/>
                                           <path d="M1580 3820 c-184 -5 -198 -6 -251 -31 -106 -50 -185 -143 -214 -254
                                           -10 -40 -15 -105 -15 -197 l0 -138 150 0 150 0 0 125 c0 131 11 176 45 189 9
                                           3 74 6 144 6 l128 0 6 74 c4 41 18 109 31 152 14 43 24 78 23 79 -1 0 -90 -2
                                           -197 -5z"/>
                                           <path d="M267 2889 c-97 -23 -190 -101 -235 -197 l-27 -57 0 -1035 0 -1035 26
                                           -55 c46 -99 122 -165 222 -195 l42 -12 5 -99 c6 -116 20 -149 78 -182 49 -27
                                           91 -28 142 -2 60 31 80 78 80 190 l0 90 610 0 609 0 -35 73 c-66 140 -64 90
                                           -64 1370 l0 1157 -707 -1 c-390 -1 -725 -5 -746 -10z m549 -410 c31 -15 48
                                           -32 63 -63 21 -42 21 -55 21 -820 0 -759 0 -778 -20 -816 -23 -45 -80 -80
                                           -130 -80 -50 0 -107 35 -130 80 -20 38 -20 57 -20 816 0 764 0 778 21 820 14
                                           30 32 48 62 63 53 26 80 26 133 0z"/>
                                           </g>
                                           </svg>
                                           
                                           
                                           <b>BC</b></span>
                                        <span class="pcoded-mtext">Travel</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Travel</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tambah Travel</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                                        <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">
                                           
                                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                           stroke="none">
                                           <path d="M1532 4950 c-285 -39 -505 -248 -558 -531 -30 -154 1 -330 81 -464
                                           41 -69 148 -181 217 -228 26 -18 48 -35 48 -39 0 -5 -238 -8 -530 -8 -499 0
                                           -533 -1 -580 -19 -66 -25 -112 -61 -151 -117 -53 -77 -59 -120 -59 -419 0
                                           -261 1 -272 22 -315 14 -26 37 -53 58 -65 34 -20 52 -20 1098 -23 l1062 -2 0
                                           320 0 320 320 0 320 0 0 -320 0 -320 1063 2 c1045 3 1063 3 1097 23 21 12 44
                                           39 57 65 22 43 23 54 23 315 0 299 -6 342 -59 419 -39 56 -85 92 -151 117 -47
                                           18 -81 19 -580 19 -292 0 -530 3 -530 8 0 4 22 21 48 39 69 47 176 159 217
                                           228 154 257 112 598 -100 810 -125 125 -283 188 -470 188 -116 0 -223 -25
                                           -320 -76 -133 -70 -304 -283 -434 -544 -117 -232 -161 -375 -169 -545 -2 -60
                                           -8 -108 -12 -108 -4 0 -10 48 -12 108 -8 171 -52 313 -170 547 -131 261 -284
                                           455 -420 532 -122 70 -286 102 -426 83z m215 -332 c111 -41 238 -200 353 -441
                                           96 -202 152 -402 129 -463 -32 -88 -409 32 -700 224 -161 107 -229 196 -245
                                           318 -31 254 222 452 463 362z m1838 8 c68 -18 103 -37 148 -82 138 -138 140
                                           -343 6 -489 -24 -26 -91 -79 -148 -117 -294 -194 -667 -312 -701 -223 -23 59
                                           34 261 130 461 177 373 347 509 565 450z"/>
                                           <path d="M322 1403 l3 -998 23 -51 c42 -93 135 -164 241 -184 34 -6 353 -10
                                           852 -10 l799 0 0 1120 0 1120 -960 0 -960 0 2 -997z"/>
                                           <path d="M2880 1280 l0 -1120 799 0 c499 0 818 4 852 10 106 20 199 91 241
                                           184 l23 51 3 998 2 997 -960 0 -960 0 0 -1120z"/>
                                           </g>
                                           </svg>
                                           <b>BC</b></span>
                                        <span class="pcoded-mtext">Oleh Oleh</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Oleh Oleh</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tambah Oleh Oleh</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Material Able</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>10K</h5>
                                                                        <p class="text-muted m-b-0">Visitors</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-volume-down text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>100%</h5>
                                                                        <p class="text-muted m-b-0">Volume</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-file-alt text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>2000+</h5>
                                                                        <p class="text-muted m-b-0">Files</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-envelope-open text-c-blue f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>120</h5>
                                                                        <p class="text-muted m-b-0">Mails</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-share-alt text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>1000</h5>
                                                                        <p class="text-muted m-b-0">Share</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-sitemap text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>600</h5>
                                                                        <p class="text-muted m-b-0">Network</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-signal text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>350</h5>
                                                                        <p class="text-muted m-b-0">Returns</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-wifi text-c-blue f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>100%</h5>
                                                                        <p class="text-muted m-b-0">Connections</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-clr-stat-card text-white green ">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-green">
                                                                <i class="fas fa-star mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>4000+</h5>
                                                                <p class="m-b-0">Ratings Received</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mat-clr-stat-card text-white blue">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-blue">
                                                                <i class="fas fa-trophy mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>17</h5>
                                                                <p class="m-b-0">Achievements</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Material statustic card end -->
                                            <!-- order-visitor start -->


                                            <!-- order-visitor end -->

                                            <!--  sale analytics start -->
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Member’s performance</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover m-b-0 without-header">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , NY</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$78.001<i class="fas fa-level-down-alt text-c-red m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>James Alexander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Shirley Hoe</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , NY</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-inline-block align-middle">
                                                                                <img src="images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                <div class="d-inline-block">
                                                                                    <h6>Nick Xander</h6>
                                                                                    <p class="text-muted m-b-0">Sales executive , EL</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-right">
                                                                            <h6 class="f-w-700">$89.051<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="row">
                                                    <!-- sale card start -->

                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Total Subscription</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                                                                <p class="m-b-0">48% From Last 24 Hours</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Order Status</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-red total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4>489</h4>
                                                                    <p class="m-0">Total Comment</p>
                                                                </div>
                                                                <span class="label bg-c-red value-badges">15%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-c-green total-card">
                                                            <div class="card-block">
                                                                <div class="text-left">
                                                                    <h4>$5782</h4>
                                                                    <p class="m-0">Income Status</p>
                                                                </div>
                                                                <span class="label bg-c-green value-badges">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Unique Visitors</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>652</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Monthly Earnings</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>5963</h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- sale card end -->
                                                </div>
                                            </div>

                                            <!--  sale analytics end -->

                                            <!-- Project statustic start -->
                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Published Project</h6>
                                                                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Completed Task</h6>
                                                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Successfull Task</h6>
                                                                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Ongoing Project</h6>
                                                                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project statustic end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="js/pcoded.min.js"></script>
    <script src="js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="js/script.js "></script>
</body>

</html>
