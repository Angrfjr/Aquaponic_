@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'List Data')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>List Data User</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        List Data User
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection
