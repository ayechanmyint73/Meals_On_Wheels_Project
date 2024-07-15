@section('title')
    Menu Create
@endsection

@extends('Users.Partner.layouts.app')

@section('content')	
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<!-- Superfish -->
<link rel="stylesheet" href="{{ asset('css/superfish.css') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<!-- Modernizr JS -->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}" defer></script>

		<div id="fh5co-blog-section" class="fh5co-section-gray">

			<div class="container">
				<div class="row row-bottom-padded-md">
                    <div class="container">
                        <div class="row">
							<form action="{{ route('partner#saveMenu') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="col-lg-6 animate-box" style="background-color: #ff5722;">									
									<h1 class="animate-box" style="color: white; padding:100px 0px 100px 50px"><strong>Start<br>Creating <br>Your <br>Own <br>Menu!</strong></h1>
								</div>
								<div class="col-lg-6" style="padding-left: 60px">
									<div class="row">
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Title</label>
												<input type="text" class="form-control" placeholder="Put your menu title here" name="menu_title" required>
											</div>
										</div>
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Picture</label>
												<input type="file" class="form-control" name="menu_image" required>
											</div>
										</div>								
										<div>
											<div class="form-group animate-box">
												<label for="basic-url">Menu Description</label>
												<textarea class="form-control" id="" cols="30" rows="7" placeholder="Put your menu description here" name="menu_description" required></textarea>
											</div>
										</div>
										<div>
											<input type="hidden" class="form-control" placeholder="Put your partner name here" name="partner" value="{{ $partnerData->id }}" required>
										</div>
										<div>
											<div class="form-group animate-box">
												<input type="submit" value="Create" class="btn btn-primary">
											</div>
										</div>
									</div>
								</div>
							</form>   
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->

	<!-- jQuery -->


	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<script src="{{ asset('js/sticky.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
	<!-- Superfish -->
	<script src="{{ asset('js/hoverIntent.js') }}" defer></script>
	<script src="{{ asset('js/superfish.js') }}" defer></script>
	
	<!-- Main JS -->
	<script src="{{ asset('js/main.js') }}" defer></script>

@endsection