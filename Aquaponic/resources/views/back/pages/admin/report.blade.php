@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Report')
@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Report</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Report
                    </li>
                </ol>
            </nav>
        </div>

    </div>
</div>

<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-black h4">Enter the data below to view the report :</h4>
        </div>
    </div>
    <form>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Device</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected="">Choose Device</option>
                    <option value="1">Sensor Lingkungan 1</option>
                    <option value="2">Tinggi Air Chamber</option>
                    <option value="3">Tinggi Air Kolam</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Indicator</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected="">Choose Indicator</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Period</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control datetimepicker" placeholder="Choose Period" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Interval</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12">
                    <option selected="">Choose Interval</option>
                    <option value="1">See All</option>
                    <option value="2">5 Minute</option>
                    <option value="3">15 Minute</option>
                    <option value="4">30 Minute</option>
                    <option value="5">60 Minute</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Time</label>
            <div class="col-sm-12 col-md-10">
                <button type="button" class="btn btn-primary">Daily</button>
                <button type="button" class="btn btn-primary">Hourly</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-10">
                <button type="button" class="btn btn-outline-secondary">Generate</button>
                <button type="button" class="btn btn-outline-secondary">Save As Scheduled Report</button>
            </div>
    </form>
</div>
@endsection
