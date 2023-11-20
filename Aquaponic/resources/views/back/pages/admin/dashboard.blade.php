@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard')
@section('content')


<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>
                    <button class="dashboard-button active" id="realtime-button" href="#">Realtime</button>
                    <button class="dashboard-button" id="overview-button" href="{{ route('admin.analisis') }}">Overview</button>
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
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#11A631" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="130" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Temperatur</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">25°C</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0.5°C</text>
        <image x="83" y="81" width="20" height="15" xlink:href="\back\src\images\gambar-temperatur.png"></image>
        <image x="85" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Co2</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">529 Ton</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">2 Ton</text>
        <image x="90" y="81" width="20" height="15" xlink:href="\back\src\images\co2.png"></image>
        <image x="85" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Intensitas Cahaya</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">4 Scale</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">2 Scale</text>
        <image x="55" y="81" width="20" height="15" xlink:href="\back\src\images\lamp.png"></image>
        <image x="80" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Kelembapan</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">52,7 %</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">2 %</text>
        <image x="70" y="81" width="20" height="15" xlink:href="\back\src\images\kelembapan.png"></image>
        <image x="90" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="195" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FF0000" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="130" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Total Volatile Organic Compounds</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">250 IAQ</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0 IAQ</text>
        <image x="20" y="81" width="20" height="15" xlink:href="\back\src\images\co2.png"></image>
        <image x="85" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="265" height="175" viewBox="0 0 265 175" fill="none" style="margin-left: 10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#11A631" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Formaldehida</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">0,03 mg/m3</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0 mg/m3</text>
        <image x="67" y="81" width="20" height="15" xlink:href="\back\src\images\fol.png"></image>
        <image x="75" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: -10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12*" fill="black" text-anchor="middle" dominant-baseline="middle">Tekanan Udara</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">1 bar</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">10 Pa</text>
        <image x="63" y="81" width="20" height="15" xlink:href="\back\src\images\udara.png"></image>
        <image x="85" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Sensor Lingkungan 1</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">PM2.5</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">78 μg/m3</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">3 μg/m3</text>
        <image x="86" y="81" width="20" height="15" xlink:href="\back\src\images\kelembapan.png"></image>
        <image x="78" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Tinggi Air Chamber</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Battery</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">68 %</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0 %</text>
        <image x="87" y="81" width="20" height="15" xlink:href="\back\src\images\batery.png"></image>
        <image x="88" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="195" viewBox="0 0 245 175" fill="none" style="margin-left: 10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Tinggi Air Chamber</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Distance</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">37 cm</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0 mm</text>
        <image x="79" y="81" width="20" height="15" xlink:href="\back\src\images\kelembapan.png"></image>
        <image x="83" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="265" height="175" viewBox="0 0 265 175" fill="none" style="margin-left: 10px;">
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Tinggi Air Kolam</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Battery</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">67 %</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">0 %</text>
        <image x="87" y="81" width="20" height="15" xlink:href="\back\src\images\batery.png"></image>
        <image x="88" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="245" height="175" viewBox="0 0 245 175" fill="none" style="margin-left: -10px;" >
        <!-- Kotak luar dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="172" stroke="black" stroke-width="1"></rect>

        <!-- Kotak dalam dengan border radius 10 dan border width 2 -->
        <rect x="0.25" y="0.25" width="240" height="17" fill="#FFFF00" stroke="black" stroke-width="1"></rect>

        <!-- Teks dan Gambar tetap seperti sebelumnya -->
        <text x="122.5" y="35" font-family="Arial" font-size="16" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">Tinggi Air Kolam</text>
        <text x="122.5" y="55" font-family="Arial" font-size="12" fill="#6f6f6f" text-anchor="middle" dominant-baseline="middle">Last Update: 11/11/23 13:24</text>
        <text x="122.5" y="90" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">Distance</text>
        <text x="122.5" y="125" font-family="Arial" font-size="26" fill="black" text-anchor="middle" dominant-baseline="middle" font-weight="bold">28,4 cm</text>
        <text x="122.5" y="155" font-family="Arial" font-size="12" fill="black" text-anchor="middle" dominant-baseline="middle">24,3 cm</text>
        <image x="80" y="81" width="20" height="15" xlink:href="\back\src\images\kelembapan.png"></image>
        <image x="78" y="146" width="25" height="15" xlink:href="\back\src\images\naik.png"></image>
    </svg>
</div>

@endsection
