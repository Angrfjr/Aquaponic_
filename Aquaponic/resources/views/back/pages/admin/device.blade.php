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

    // Open modal function
    function openModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';
    }

    // Close modal function
    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }

    // Close modal when clicking outside the modal content
    window.onclick = function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
    
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

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 110%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 10px;
        border: 1px solid #888;
        width: 55%;
    }

    /* The Close Button */
    .close {
    color: #aaaaaa;
    position: absolute;
    top: 10px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    font-size: 28px;
    font-weight: bold;
    }


    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* Adjusted CSS for the title inside modal content */
    .modal-content .title {
        font-size: 24px;
        color: #000000;
        padding-top: 20px;
        font-weight: bold;
    }

    .modal-content .description {
        font-size: 14px; /* Ukuran font untuk deskripsi pop-up */
        color: #0000ff; /* Warna font untuk deskripsi pop-up */
        text-align: left;
    }
    #myBtn2 {
    width: 130px; /* Sesuaikan dengan lebar konten */
    height: 45px;
    font-size: 16px;
    background-color: #e9e9e9;
    color: black;
    border: 15px;
    padding: 10px;
    cursor: pointer;
    margin-left: 20px;
}

#myBtn2:hover {
    background-color: #dadada;
}

.clearfix button {
    border: 2px solid #155C72;
    padding: 10px 20px;
    background-color: #155C72;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    border-radius: 10px;
}

.clearfix button:hover {
    background-color: #206f71;
    border: 2px solid #206f71;
}


</style>


</style>

<div class="card bg-white pd-20 mb-30">
    <div class="clearfix">
        <div class="pull-left" onclick="refreshPage()" style="cursor: pointer;">
            <span class="btn btn-link-condition">Condition</span>
        </div>
        <div class="clearfix" style="margin-top: 50px;">
            <button onclick="openModal()">+ Device</button>
        </div>
    </div>

    <!-- Modal content -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p class="title" style="margin-left: 30px;">Add Device</p>
            <p class="description" style="margin-left: 30px;">Description</p>
    <form>
        <div class="form-group row" style="margin-left: 5px;">
            <label class="col-sm-12 col-md-10 col-form-label">
                <span class="text-danger">*</span>Select Device Data Source
            </label>
            <div class="col-sm-12 col-md-10" style="margin-left: 5px;">
                <div class="clearfix">
                    <div class="pull-left">
                        <select class="custom-select col-12" style="width: 725px;" required>
                            <option value="" disabled selected>Choose Device</option>
                            <option value="1">Joager One Wifi</option>
                            <option value="2">Joager One Lora</option>
                            <option value="3">Antares</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row" style="margin-left: 10px; margin-bottom: 10px;">
        <button id="myBtn2">+ Add Source</button>
        </div>

        <div class="form-group row" style="margin-left: 10px;">
            <label for="dropdown" class="col-sm-12 col-md-10 col-form-label"><span class="text-danger">*</span>Sector</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected>Select Option</option>
                    <option value="option1">Wapres Aquaponic</option>
                </select>
            </div>
        </div>

        <div class="form-group row" style="margin-left: 10px;">
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
        <p class="description" style="margin-left: 30px;">Information</p>

        <div class="form-group row" style="margin-left: 10px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label"><span class="text-danger">*</span>Device Name</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="namaLabel" placeholder="Enter Nama Label">
            </div>
        </div>

        <div class="form-group row" style="margin-left: 10px;">
            <label for="information" class="col-sm-12 col-md-10 col-form-label">Device Description</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="information" placeholder="Enter Information">
            </div>
            <div class="form-group row" style="margin-left: -115px; margin-top: 60px;">
            <div class="col-sm-10 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<div id="myModal2" class="modal">
        <div class="form-group row" style="margin-left: 10px;">
            <label for="namaLabel" class="col-sm-12 col-md-10 col-form-label">Nama Label</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="namaLabel" placeholder="Enter Nama Label">
            </div>
        </div>

        <div class="form-group row" style="margin-left: 10px;">
            <label for="information" class="col-sm-12 col-md-10 col-form-label">Information</label>
            <div class="col-sm-12 col-md-10">
                <input type="text" class="form-control" id="information" placeholder="Enter Information">
            </div>
        </div>
  </div>
 
</div>
</div>

@endsection
