<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>@yield('pagetitle')</title>
    <style>
        .brand-logo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            vertical-align: middle;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 22px;
            color: #fff;
            letter-spacing: .05em;
            font-weight: 500;
            line-height: 45px;
            font-family: 'Inter', sans-serif;
            padding: 0 25px;
            width: 50px; /* Ubah ukuran lebar sesuai kebutuhan Anda */
            height: 50px; /* Ubah ukuran tinggi sesuai kebutuhan Anda */
        }

        .brand-logo img.dark-logo {
            width: 130px; /* Ubah ukuran lebar sesuai kebutuhan Anda */
            height: 60px; /* Ubah ukuran tinggi sesuai kebutuhan Anda */
        }

        .sidebar-small-cap {
            margin-top: 15px; /* Ubah jarak dari atas sesuai kebutuhan Anda */
        }

        .sidebar-small-cap {
            margin-top: 20px; /* Sesuaikan dengan jarak yang Anda inginkan dari atas */
        }

        .dashboard-button {
            background-color: #155C72;
            color: #ffffff;
            border: 2px solid #155C72;
            border-radius: 8px;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            line-height: 15px; /* Sesuaikan tinggi sesuai kebutuhan Anda */
            text-align: center; /* Memastikan teks berada di tengah tombol */
            font-size: 14px; /* Ubah ukuran font sesuai kebutuhan Anda */
        }

        .dashboard-button.active {
            background-color: #31ACAF; /* Warna latar belakang tombol saat aktif */
            border-color: #31ACAF; /* Warna border tombol saat aktif */
        }

        #overview-button.active {
            background-color: #31ACAF; /* Warna latar belakang tombol saat aktif */
            border-color: #31ACAF; /* Warna border tombol saat aktif */
        }


        #analysis-button.active {
            background-color: #31ACAF; /* Warna latar belakang tombol saat aktif */
            border-color: #31ACAF; /* Warna border tombol saat aktif */
        }


        /* .dashboard-button:hover {
            background-color: #31ACAF; /* Warna latar belakang saat kursor berada di atas tombol */
            border-color: #31ACAF; /* Warna border tombol saat aktif */
        
        .dropdown-menu.dropdown-menu-right {
            margin-top: -200px; /* Sesuaikan jarak ke atas sesuai kebutuhan Anda */
        }


        /* Untuk Gauge */
        .toggle-switch {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 20px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #16425C;
        }

        /* input:focus + .slider {
            box-shadow: 0 0 0px #16425C;
        } */

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* .slider.round {
            border-radius: 4px;
        } */

        .slider.round:before {
            border-radius: 50%;
        }

        .toggle-label {
            margin-right: 10px; /* Atur jarak dari saklar */
            margin-left: 10px;
            font-size: 20px;
        }

        





    </style>
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/back/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/back/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/back/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->

    @stack('stylesheets')
</head>

<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/img.jpg" alt="" />
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/photo1.jpg" alt="" />
                                        <h3>Lea R. Frith</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/photo2.jpg" alt="" />
                                        <h3>Erik L. Richards</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/photo3.jpg" alt="" />
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/photo4.jpg" alt="" />
                                        <h3>Renee I. Hansen</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/back/vendors/images/img.jpg" alt="" />
                                        <h3>Vicki M. Coleman</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @if ( Auth::guard('admin')->check() )
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="/back/vendors/images/photo1.jpg" alt="" />
                        </span>
                        <span class="user-name">Ross C. Lopez</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="{{ route('admin.logout_handler') }}" onclick="event.preventDefault();document.getElementById('adminLogoutForm').
                                submit();"><i class="dw dw-logout"></i>Log Out</a>
                        <form action="{{ route('admin.logout_handler') }}" id="adminLogoutForm" method="POST">@csrf</form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="">
                <img src="/back/vendors/images/logotelkom.png" alt="" class="dark-logo" />
                
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                <li>
                        <div class="sidebar-small-cap">MENU</div>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-bar-chart-line"></span>
                            <span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-activity"></span
								><span class="mtext">Analysis</span>
							</a>
							<ul class="submenu">
								<li><a href="highchart.html">Analysis 1</a></li>
								<li><a href="knob-chart.html">Analysis 2</a></li>
								<li><a href="jvectormap.html">Analysis 3</a></li>
								<li><a href="apexcharts.html">Analysis 4</a></li>
							</ul>
						</li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-clipboard-data"></span>
                            <span class="mtext">Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-pc-display"></span>
                            <span class="mtext">Device</span>
                        </a>
                    </li>

                    <li>
                        <div class="sidebar-small-cap">SETTING</div>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi dw bi-bell"></span>
                            <span class="mtext">Alert</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-person"></span>
                            <span class="mtext">List Data User</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-arrows-angle-contract"></span>
                            <span class="mtext">Treshold</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-code"></span>
                            <span class="mtext">Indicator</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>
                                <button class="dashboard-button active" id="realtime-button" href="#">Realtime</button>
                                <button class="dashboard-button" id="overview-button" href="#">Overview</button>
                                <button class="dashboard-button" id="analysis-button" href="#">Analysis</button>
                                </h4>
                            </div>
                            <div class="toggle-switch">
                                <span class="toggle-label">Gauge</span>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    All Indicators
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Battery (%)</a>
                                    <a class="dropdown-item" href="#">Co2 (ppm)</a>
                                    <a class="dropdown-item" href="#">Distance (mm)</a>
                                    <a class="dropdown-item" href="#">Formaldehida (mg/m3)</a>
                                    <a class="dropdown-item" href="#">Intensitas Cahaya (scale)</a>
                                    <a class="dropdown-item" href="#">Kelembapan (%)</a>
                                    <a class="dropdown-item" href="#">PM2.5 (μg/m3)</a>
                                    <a class="dropdown-item" href="#">Tekanan Udara (hPa)</a>
                                    <a class="dropdown-item" href="#">Temperature (℃)</a>
                                    <a class="dropdown-item" href="#">Total Volatile Organic Compounds (IAQ)</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    All Status
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Bahaya</a>
                                    <a class="dropdown-item" href="#">Good</a>
                                    <a class="dropdown-item" href="#">Waspada</a>
                                    <a class="dropdown-item" href="#">Offline</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    More Filters
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Bahaya</a>
                                    <a class="dropdown-item" href="#">Good</a>
                                    <a class="dropdown-item" href="#">Waspada</a>
                                    <a class="dropdown-item" href="#">Offline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <!-- Isi bagian content -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-right: 10px;" >
                    <!-- Kotak luar dengan border radius 10 dan border width 2 -->
                    <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"/>

                    <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
                    <rect x="0.25" y="0.25" width="240" height="17" fill="#11A631" stroke="black" stroke-width="1"/>
                    
                    <!-- Teks dan Gambar tetap seperti sebelumnya -->
                    <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
                    <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23  13:24</text>
                    <text x="122.5" y="90" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle">Temperatur</text>
                    <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">25°C</text>
                    <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0.5°C</text>
                    <image x="55" y="78" width="30" height="20" xlink:href="\back\src\images\gambar-temperatur.png" />
                    <image x="85" y="145" width="25" height="15" xlink:href="\back\src\images\naik.png" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none">
                    <!-- Kotak luar dengan border radius 10 dan border width 2 -->
                    <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"/>

                    <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
                    <rect x="0.25" y="0.25" width="240" height="17" fill="#11A631" stroke="black" stroke-width="1"/>
                    
                    <!-- Teks dan Gambar tetap seperti sebelumnya -->
                    <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
                    <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23  13:24</text>
                    <text x="122.5" y="90" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle">Temperatur</text>
                    <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">25°C</text>
                    <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0.5°C</text>
                    <image x="55" y="78" width="30" height="20" xlink:href="\back\src\images\gambar-temperatur.png" />
                    <image x="85" y="145" width="25" height="15" xlink:href="\back\src\images\naik.png" />
                </svg>

                
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By
                <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="/back/vendors/scripts/core.js"></script>
    <script src="/back/vendors/scripts/script.min.js"></script>
    <script src="/back/vendors/scripts/process.js"></script>
    <script src="/back/vendors/scripts/layout-settings.js"></script>
    @stack('scripts')
</body>

</html>
