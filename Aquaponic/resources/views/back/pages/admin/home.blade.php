@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Home</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Home
                    </li>
                </ol>
            </nav>
        </div>

    </div>
</div>

<div class="card-box pd-20 height-100-p mb-30">
					<div class="row align-items-center">

						<div class="col-md-8">
							<h4 class="font-20 weight-500 mb-10 text-capitalize">
								Welcome back
								<div class="weight-600 font-30 text-blue">Admin!</div>
							</h4>
							<p class="font-18 max-width-600">
								Ini adalah Dashboard Pemantauan Inovasi Aquaponic Wapres dari ITDRI.
                                Disini anda dapat melihat keseluruhan aktifitas terbaru terkait data
                                Sensor, Chamber, dan Battery.
							</p>
						</div>
					</div>
				</div>

@endsection
