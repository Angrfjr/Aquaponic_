@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Alert')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Alert</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Alert
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

    document.addEventListener('DOMContentLoaded', function() {
        // Your JavaScript code here

        var targetDropdown = document.getElementById('dropdown1');
        var dynamicContent = document.getElementById('dynamicContent');

        // Event listener for when the "Choose Condition" dropdown changes
        document.getElementById('chooseCondition').addEventListener('change', function () {
            // Check if "Target" is selected
            if (this.value === '1') {
                // Show dynamic content
                dynamicContent.style.display = 'block';

                // Show the "Target" dropdown if it was previously hidden
                targetDropdown.style.display = 'block';
            } else {
                // Hide dynamic content if "Target" is not selected
                dynamicContent.style.display = 'none';
            }
        });

        // Event listener for when the "Target" dropdown loses focus
        targetDropdown.addEventListener('blur', function () {
            // Hide the "Target" dropdown when it loses focus
            this.style.display = 'none';
        });

        // Event listener for when the "Target" dropdown is clicked
        targetDropdown.addEventListener('click', function () {
            // Show the "Target" dropdown when it is clicked
            this.style.display = 'block';
        });

        // Function to create a text input
        function createTextInput(id) {
            var input = document.createElement('input');
            input.type = 'text';
            input.id = id;
            input.className = 'form-control col-12';
            input.placeholder = 'Enter Text';

            return input;
        }
    });

    
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
            <span class="btn btn-link-condition">Rules</span>
        </div>
        <div class="clearfix" style="margin-top: 50px;"> <!-- Tambahkan margin-top untuk memberi jarak antara Condition dan + Device -->
            <div class="pull-left" onclick="showPopup()" style="cursor: pointer; margin-left: 10px;">
                <button class="btn btn-primary">+ Add Rules</button>
            </div>
            <div class="pull-left" onclick="showSetSectorPopup()" style="cursor: pointer; margin-left: 10px;">
        </div>
        </div>
    </div>
    
    
    <div id="popup" class="popup">
    <!-- Isi pop-up di sini -->
    <p class="title">Add Rule</p>
    <button onclick="hidePopup()">X</button>
    <form>
        <div class="form-group row">
        <div class="form-group row" style="margin-left: 0px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label"><span class="text-danger">*</span>Alert Name</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="namaLabel" placeholder="Enter Alert Name" style="width: 740px;">
            </div>
            </div>
            <label class="col-sm-12 col-md-10 col-form-label">
                <span class="text-danger">*</span>Device
            </label>
            <div class="col-sm-12 col-md-10">
                <div class="clearfix">
                    <div class="pull-left">
                        <select class="custom-select col-12" style="width: 750px;" required>
                            <option value="" disabled selected>Choose Device</option>
                            <option value="1">Sensor Lingkungan 1</option>
                            <option value="2">Tinggi Air Chamber</option>
                            <option value="3">Tinggi Air Kolam</option>
                        </select>
                    </div>
                </div>
            </div>
            <label class="col-sm-12 col-md-10 col-form-label" style="margin-top: 15px;">
                <span class="text-danger">*</span>When Condition
            </label>
            <div class="col-sm-12 col-md-10">
                <div class="clearfix">
                    <div class="pull-left">
                        <select id="chooseCondition" class="custom-select col-12" style="width: 750px;" required>
                            <option value="" disabled selected>Choose Condition</option>
                            <option value="1">Target</option>
                            <option value="2">Indikator</option>
                        </select>
                    </div>
                </div>
                <div id="dynamicContent" style="display: none;">
            <!-- Dropdown 1 -->
            <select id="dropdown1" class="custom-select col-12">
                <option value="" disabled selected>Choose Period</option>
                <option value="daily">Daily</option>
                <option value="monthly">Monthly</option>
            </select>


            <!-- Dropdown 2 -->
            <select id="dropdown2" class="custom-select col-12">
                <option value="">IS GRATER THAN</option>
                <option value="">IS LESS THAN</option>
            </select>

            <!-- Text Input -->
            <input type="text" id="textInput" class="form-control col-12" placeholder="Enter Text">
            </div>
            </div>
            </div>  

        
<div class="footer-content">
    <!-- Your footer content here -->
</div>
</div>

@endsection
