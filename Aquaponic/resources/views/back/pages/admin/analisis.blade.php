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

        <div class="dropdown" style="position: absolute; top: 25px; right: 65px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a>
                <a class="dropdown-item" href="#">Action 3</a>
            </div>
        </div>

        <!-- Set the size of the canvas here as well -->
        <canvas id="humidityChart" width="300" height="150"></canvas>

    </div>
</div>

@endsection
