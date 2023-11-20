@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Analysis')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Analysis</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Analysis
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<style>
        .custom-font-size {
            font-size: 10px; /* Adjust the font size as needed */
        }
        .icon {
            margin-right: 2px; /* Adjust the margin as needed */
            margin-left: -5px;
            width: 15px; /* Adjust the width of the image */
            height: 15px; /* Adjust the height of the image */
        }
</style>

<div class="card bg-white pd-20 mb-30">
    <!-- Place this at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sample data for the last 7 days
            const days = ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'];
            const humidityData = [60, 65, 70, 75, 80, 85, 90];

            // Get the canvas element
            const ctx = document.getElementById('humidityChart').getContext('2d');

            // Set the size of the chart
            ctx.canvas.width = 300;
            ctx.canvas.height = 150;

            // Create the humidity chart
            const humidityChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: days,
                    datasets: [{
                        label: 'Sensor Lingkungan 1',
                        data: humidityData,
                        backgroundColor: 'rgba(75, 122, 192, 2)',
                        borderColor: 'rgba(75, 122, 192, 1)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointBackgroundColor: 'rgba(75, 122, 192, 1)',
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            });
        });
    </script>

    <div style="width: 70%; margin: auto; text-align: left;">
        <h3 style="margin-left: -140px; margin-bottom: 20px;">Trend Kelembapan - Last 7 Days</h3>

        <div class="dropdown" style="position: absolute; top: 25px; right: 80px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\edit.png" alt="Icon" class="icon">
                    Edit
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as JPG
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as PDF
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as CSV
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\delete.png" alt="Icon" class="icon">
                    Delete
                </a>
            </div>
        </div>

        <!-- Set the size of the canvas here as well -->
        <canvas id="humidityChart" width="300" height="150"></canvas>
    </div>
</div>

<!-- New Card for Water Level Chart -->
<div class="card bg-white pd-20 mb-30">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sample data for the last 7 days
            const days = ['Hours 1', 'Hours 2', 'Hours 3', 'Hours 4', 'Hours 5', 'Hours 6', 'Hours 7', 'Hours 8', 'Hours 9', 'Hours 10', 'Hours 11', 'Hours 12' ];
            const waterLevelData = [0, 10, 10, 15, 30, 50, 50, 20, 35, 30, 30, 30];

            // Sample data for time intervals from 07:00 to 05:00, every 2 hours
            const timeIntervals = [
                '20/11/23 07:00', '20/11/23 09:00', '20/11/23 11:00', '20/11/23 13:00', '20/11/23 15:00', '20/11/23 17:00', '20/11/23 19:00', '20/11/23 21:00', '20/11/23 23:00', '20/11/23 01:00', '20/11/23 03:00', '20/11/23 05:00'
            ];

            // Get the canvas element
            const ctxWaterLevel = document.getElementById('waterLevelChart').getContext('2d');

            // Set the size of the chart
            ctxWaterLevel.canvas.width = 300;
            ctxWaterLevel.canvas.height = 150;

            // Create the water level chart
            const waterLevelChart = new Chart(ctxWaterLevel, {
                type: 'line',
                data: {
                    labels: timeIntervals,
                    datasets: [{
                        label: 'Water Level',
                        data: waterLevelData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        pointRadius: 5,
                        pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 70
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            });
        });
    </script>

    <div style="width: 70%; margin: auto; text-align: left;">
        <h3 style="margin-left: -140px; margin-bottom: 20px;">Water Level - Last 7 Days</h3>

        <div class="dropdown" style="position: absolute; top: 25px; right: 80px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\edit.png" alt="Icon" class="icon">
                    Edit
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as JPG
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as PDF
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\unduh.png" alt="Icon" class="icon">
                    Download as CSV
                </a>
                <a class="dropdown-item custom-font-size" href="#">
                    <img src="\back\src\images\delete.png" alt="Icon" class="icon">
                    Delete
                </a>
            </div>
        </div>

        <!-- Set the size of the canvas here as well -->
        <canvas id="waterLevelChart" width="300" height="150"></canvas>
    </div>
</div>

@endsection
