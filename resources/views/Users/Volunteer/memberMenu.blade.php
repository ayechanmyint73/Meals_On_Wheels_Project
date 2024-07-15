@section('title')
    All Menu
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')		
		<div class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Menus</h3>
					</div>
				</div>
				
			</div>
			<div class="container">
				@foreach ($menuData as $menu)
				<a href="#">
				<div class="col-md-4" style="padding-top:50px">
					<div class="fh5co-team text-center animate-box">
						<img class="img-thumbnail" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width:300px; height:200px;" alt="menu images">
						<div>
							<h1>{{ $menu->menu_title }}</h1>
							<p>{{ $menu->menu_description }}</p>
							{{-- <p><a href="{{ route('member#viewMenu', $menu->id) }}">View Menu >>></a></p> --}}
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

