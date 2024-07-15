@section('title')
    Menu Management
@endsection

@extends('Users.Admin.layouts.app')

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
		<div class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3 style="margin-top: 40px;">Menus</h3>
					</div>
					@if (Session::has('menuCreated'))
						<div class="alert alert-warning animate-box" role="alert">
							{{ Session::get('menuCreated') }}
						</div>
					@endif
					@if (Session::has('menuDeleted'))
						<div class="alert alert-warning animate-box" role="alert">
							{{ Session::get('menuDeleted') }}
						</div>
					@endif
					@if (Session::has('updateData'))
                        <div class="alert alert-warning animate-box" role="alert">
                            {{ Session::get('updateData') }}
                        </div>
                    @endif
				</div>
			</div>
			<div class="container">
				@foreach ($menuData as $menu)
				<a href="{{ route('partner#viewMenu', $menu->id) }}">
				<div class="col-md-4" style="padding-top:50px;">
					<div class="fh5co-team text-center animate-box">
						<img class="img-thumbnail" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width:300px; height:200px;" alt="menu images">
						<div>
							<h1>{{ $menu->menu_title }}</h1>
							<p>{{ $menu->menu_description }}</p>
							@if ( Auth::user() -> role == 'admin')
								<p><a href="{{ route('admin#updateMenu', $menu->id) }}">Update Menu >>></p>
								<p><a href="{{ route('admin#deleteMenu', $menu->id) }}">Delete Menu >>></a></p>
							@endif
						</div>
					</div>
				</div>
				</a>
				@endforeach
			</div>

			
		<!-- fh5co-blog-section -->
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
