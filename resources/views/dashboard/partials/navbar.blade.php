

<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header" style="height: 20.5vh;display: flex;align-items: center;justify-content: center;">
                <div class="user-details">
                    <span style="font-size: 18px;">Welcome Back</span>
                    <span id="more-details">{{ auth()->user()->username }}<i class="fa fa-caret-down"></i></span>
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
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Mengelola</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{ Request::is('dashboard/hotel*') ? 'active' : '' }}" >
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
                    <li class="{{ Request::is('dashboard/hotel') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[7]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Hotel</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/hotel/create') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[7]->slug }}/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Hotel</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ (Request::is('dashboard/wisata-alam') || Request::is('dashboard/wisata-buatan') || Request::is('dashboard/wisata-budaya') || Request::is('dashboard/destinasi/create') ) ? 'active' : '' }}">
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
                    <li class="{{ Request::is("dashboard/wisata-alam") ? "active" : "" }}">
                        <a href="/dashboard/{{ $categories[0]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Wisata Alam</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is("dashboard/wisata-buatan") ? "active" : "" }}">
                        <a href="/dashboard/{{ $categories[1]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Wisata Buatan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is("dashboard/wisata-budaya") ? "active" : "" }}">
                        <a href="/dashboard/{{ $categories[2]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Wisata Budaya</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/destinasi/create') ? "active" : "" }}">
                        <a href="/dashboard/destinasi/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Destinasi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ (Request::is('dashboard/resto') || Request::is('dashboard/kafe') || Request::is('dashboard/kuliner') || Request::is('dashboard/kuliner') || Request::is('dashboard/makanan/create')) ? 'active' : '' }}">
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
                    <li class="{{ Request::is("dashboard/resto") ? "active" : "" }}">
                        <a href="/dashboard/{{ $categories[3]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Resto</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is("dashboard/kuliner") ? "active" : ""}}">
                        <a href="/dashboard/{{ $categories[4]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Kuliner</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is("dashboard/kafe") ? "active" : ""}}">
                        <a href="/dashboard/{{ $categories[5]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Kafe</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/makanan/create') ? "active" : ""}}">
                        <a href="/dashboard/makanan/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Makanan</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ Request::is('dashboard/travel*') ? 'active' : '' }}">
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
                    <li class="{{ Request::is('dashboard/travel') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[8]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Travel</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/travel/create') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[8]->slug }}/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Travel</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ Request::is('dashboard/oleh*') ? 'active' : '' }}">
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
                    <li class="{{ Request::is('dashboard/oleh-oleh') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[6]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Oleh Oleh</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/oleh-oleh/create') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[6]->slug }}/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Oleh Oleh</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ (Request::is('dashboard/berita-pembangunan') || Request::is('dashboard/berita-ekonomi') || Request::is('dashboard/berita-kesos') || Request::is('dashboard/berita-pemerintahan')) ? 'active' : '' }}">
                <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                    <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                        preserveAspectRatio="xMidYMid meet">
                       
                       <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                        stroke="none">
                       <path d="M1205 4950 c-16 -11 -38 -34 -47 -52 -17 -31 -18 -155 -18 -2203 -1
                       -2318 1 -2244 -49 -2376 -12 -30 -37 -81 -56 -113 -19 -32 -35 -60 -35 -62 0
                       -2 785 -4 1746 -4 1932 0 1811 -4 1959 65 181 84 317 236 383 430 l27 80 3
                       2070 c2 1476 -1 2078 -9 2096 -6 15 -24 40 -40 55 l-30 29 -1902 2 c-1881 3
                       -1902 3 -1932 -17z m2982 -846 c90 -43 104 -166 28 -233 l-36 -31 -1049 0
                       -1049 0 -35 30 c-61 54 -71 136 -24 195 44 56 -1 54 1106 55 931 0 1027 -1
                       1059 -16z m-25 -844 c46 -13 93 -66 102 -114 11 -56 -23 -119 -78 -145 -42
                       -21 -53 -21 -1048 -21 -553 0 -1020 3 -1038 6 -41 9 -96 63 -105 104 -10 43 1
                       90 28 123 46 58 13 56 1102 57 649 0 1013 -4 1037 -10z m35 -870 c67 -40 87
                       -110 51 -180 -44 -86 43 -80 -1123 -80 -1003 0 -1031 1 -1062 20 -92 56 -94
                       177 -4 237 l34 23 1036 0 c1009 0 1037 -1 1068 -20z m-10 -846 c90 -43 104
                       -166 28 -233 l-36 -31 -1049 0 -1049 0 -35 30 c-61 54 -71 136 -24 195 44 56
                       -1 54 1106 55 931 0 1027 -1 1059 -16z"/>
                       <path d="M68 4383 c-14 -9 -36 -33 -47 -54 l-21 -37 2 -1914 c3 -1859 4 -1914
                       22 -1958 55 -130 153 -223 273 -260 207 -64 423 31 516 227 l32 68 3 1923 c2
                       2126 7 1961 -61 2002 -30 19 -52 20 -362 20 -289 -1 -333 -3 -357 -17z"/>
                       </g>
                       </svg>
                       </span>
                    <span class="pcoded-mtext">Berita</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ Request::is('dashboard/berita-pembangunan') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[9]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">{{ $categories[9]->nama }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/berita-ekonomi') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[10]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">{{ $categories[10]->nama }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/berita-kesos') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[11]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">{{ $categories[11]->nama }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/berita-pemerintahan') ? 'active' : '' }}">
                        <a href="/dashboard/{{ $categories[12]->slug }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">{{ $categories[12]->nama }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ Request::is('dashboard/berita/create') ? 'active' : '' }}">
                        <a href="/dashboard/berita/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Berita</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Koleksi</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu" >
                <a href="javascript:void(0)" class="waves-effect waves-dark" style="height: 45px">
                    <span class="pcoded-micon"><svg class="ti-layout-grid2-alt svg-hotel" version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                        preserveAspectRatio="xMidYMid meet">
                       
                       <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                        stroke="none">
                       <path d="M990 4755 c-62 -19 -123 -74 -155 -139 -22 -45 -30 -90 -55 -307 -16
                       -140 -30 -266 -30 -281 l0 -28 1663 0 c1842 0 1734 3 1877 -66 99 -49 213
                       -161 259 -254 70 -144 65 -41 68 -1427 l4 -1251 44 25 c51 28 100 83 115 128
                       17 54 342 2897 336 2943 -11 81 -69 164 -144 205 -38 20 -76 30 -173 42 -543
                       66 -3687 425 -3721 424 -24 0 -63 -7 -88 -14z"/>
                       <path d="M149 3692 c-37 -19 -64 -43 -86 -76 -66 -97 -63 -48 -63 -1148 0
                       -549 2 -998 4 -998 3 0 213 152 468 337 255 186 492 352 528 370 168 84 361
                       85 535 4 77 -36 88 -45 540 -440 254 -222 398 -341 435 -359 65 -32 175 -42
                       245 -22 25 7 390 214 812 460 l768 447 0 609 0 609 -23 51 c-27 60 -89 123
                       -152 156 l-45 23 -1956 3 -1956 2 -54 -28z m2633 -435 c194 -70 334 -225 378
                       -417 45 -195 -26 -423 -172 -555 -181 -163 -422 -196 -647 -90 -95 45 -213
                       160 -259 253 -167 339 23 744 390 827 91 21 225 13 310 -18z"/>
                       <path d="M2497 2996 c-106 -39 -179 -127 -196 -237 -28 -176 102 -337 279
                       -347 167 -9 304 111 317 280 9 117 -57 234 -164 288 -59 30 -177 38 -236 16z"/>
                       <path d="M1180 1961 c-59 -19 -133 -70 -640 -444 l-535 -394 -3 -277 c-1 -170
                       2 -293 8 -316 16 -60 68 -121 129 -152 l55 -28 1948 0 c1900 0 1950 0 2003 19
                       71 25 128 71 163 129 l27 47 3 698 c1 383 0 697 -3 697 -3 0 -310 -176 -681
                       -391 -372 -215 -705 -405 -740 -421 -163 -76 -369 -71 -538 14 -86 43 -81 40
                       -515 422 -442 388 -457 399 -581 403 -41 1 -86 -1 -100 -6z"/>
                       </g>
                       </svg></span>
                    <span class="pcoded-mtext">Koleksi</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Koleksi Foto</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Koleksi Video</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#/create" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Tambah Koleksi</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>