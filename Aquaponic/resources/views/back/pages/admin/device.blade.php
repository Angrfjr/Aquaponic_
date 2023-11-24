@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Device')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Device</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Device
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<script>
    function refreshPage() {
        location.reload(true); // Reload the page
    }
    function refreshPage() {
        location.reload(true);
    }

    function refreshPage() {
        location.reload(true);
    }

    function showPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('popup').style.display = 'none';
    }
    

</script>

<style>

    .btn-link-condition {
        color : #333;
        cursor: pointer;
        transition: color 0.3s; /* Animasi perubahan warna */
        text-decoration: underline;
    }
    .btn-link-condition:hover {
        color: #31ACAF; /* Ubah warna saat dihover sesuai kebutuhan */
        text-decoration: underline;
    }
    .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    max-height: 80vh; /* Set ketinggian maksimum */
    overflow-y: auto; /* Biarkan konten di dalam popup dapat di-scroll jika melebihi ketinggian maksimum */
    width: 950px; /* Ubah lebar sesuai kebutuhan Anda */
    max-width: 90%; /* Maksimum lebar yang diizinkan */
    height: 600px; /* Ubah tinggi sesuai kebutuhan Anda */
    max-height: 90%; /* Maksimum tinggi yang diizinkan */
    }

    .popup .title {
        font-size: 24px; /* Ukuran font untuk judul pop-up */
        color: #000000; /* Warna font untuk judul pop-up */
        padding-top: 20px;
        text-align: left;
        font-weight: bold;
    }

    .popup .description {
        font-size: 12px; /* Ukuran font untuk deskripsi pop-up */
        color: #0000ff; /* Warna font untuk deskripsi pop-up */
        text-align: left;
    }

    .popup button {
        font-size: 14px; /* Ukuran font untuk tombol tutup pop-up */
        color: #fff; /* Warna font untuk tombol tutup pop-up */
        background-color: #31ACAF; /* Warna latar belakang tombol tutup pop-up */
        border: none;
        padding: 4px 8px;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .popup button:hover {
        background-color: #21888F; /* Warna latar belakang tombol tutup pop-up saat dihover */
    }

    .popup2 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    max-height: 80vh;
    overflow-y: auto;
    width: 800px;
    max-width: 90%;
    height: 600px;
    max-height: 90%;
}

    
</style>

<div class="card bg-white pd-20 mb-30">
    <div class="clearfix">
        <div class="pull-left" onclick="refreshPage()" style="cursor: pointer;">
            <span class="btn btn-link-condition">Condition</span>
        </div>
        <div class="clearfix" style="margin-top: 50px;"> <!-- Tambahkan margin-top untuk memberi jarak antara Condition dan + Device -->
            <div class="pull-left" onclick="showPopup()" style="cursor: pointer; margin-left: 10px;">
                <button class="btn btn-primary">+ Device</button>
            </div>
            <div class="pull-left" onclick="showSetSectorPopup()" style="cursor: pointer; margin-left: 10px;">
            <button class="btn btn-primary">
                <img src="\back\src\images\setting.png" alt="Settings" style="width: 20px; height: 20px; margin-right: 5px;"> Set Sector
            </button>
        </div>
        </div>
    </div>
    
    
    <div id="popup" class="popup">
    <!-- Isi pop-up di sini -->
    <p class="title">Add Device</p>
    <p class="description">Description</p>
    <button onclick="hidePopup()">X</button>
    <form>
        <div class="form-group row">
            <label class="col-sm-12 col-md-10 col-form-label">
                <span class="text-danger">*</span>Select Device Data Source
            </label>
            <div class="col-sm-12 col-md-10">
                <div class="clearfix">
                    <div class="pull-left">
                        <select class="custom-select col-12" required>
                            <option value="" disabled selected>Choose Device</option>
                            <option value="1">Joager One Wifi</option>
                            <option value="2">Joager One Lora</option>
                            <option value="3">Antares</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 0px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label">Add Source</label>
        </div>

        <div class="form-group row" style="margin-top: 0px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label">> Nama Label</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="namaLabel" placeholder="Enter Nama Label">
            </div>
        </div>

        <div class="form-group row" style="margin-top: -10px;">
            <label for="information" class="col-sm-12 col-md-10 col-form-label">> Information</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="information" placeholder="Enter Information">
            </div>
        </div>

        <div class="form-group row">
            <label for="dropdown" class="col-sm-12 col-md-10 col-form-label"><span class="text-danger">*</span>Sector</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected>Select Option</option>
                    <option value="option1">Wapres Aquaponic</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="dropdown" class="col-sm-12 col-md-10 col-form-label">Data Sending Interval</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected>Select Option</option>
                    <option value="option1">5 Minute</option>
                    <option value="option1">10 Minute</option>
                    <option value="option1">15 Minute</option>
                    <option value="option1">30 Minute</option>
                    <option value="option1">45 Minute</option>
                    <option value="option1">60 Minute</option>
                </select>
            </div>
        </div>
        <p class="description">Information</p>

        <div class="form-group row" style="margin-top: 0px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label"><span class="text-danger">*</span>Device Name</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="namaLabel" placeholder="Enter Nama Label">
            </div>
        </div>

        <div class="form-group row" style="margin-top: -10px;">
            <label for="information" class="col-sm-12 col-md-10 col-form-label">Device Description</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="information" placeholder="Enter Information">
            </div>
            <div class="form-group row" style="margin-top: 70px;">
            <div class="col-sm-12 col-md-10 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>


<!-- Popup for "Set Sector" -->
<div id="setSectorPopup" class="popup2" style="display: none;">
<p class="title">Add Device</p>
        <!-- Content for the "Set Sector" popup -->
        <!-- ... -->
    </div>


<div class="footer-content">
    <!-- Your footer content here -->
</div>
</div>

@endsection