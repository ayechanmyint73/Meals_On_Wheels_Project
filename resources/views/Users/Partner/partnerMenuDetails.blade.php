@section('title')
	{{ $viewMenu->menu_title }} Details
@endsection

@extends('Users.Partner.layouts.app')

@section('content')

<style>
	.menu_details{
		padding: 20px 0;
	}
	.meal_img{
		width: 100%;
		height: 400px;
	}

	.menu_loc{
        font-weight: bold;
        color: black;
    }

	.btns{
		margin: 20px 0; 
		padding: 30px;
	}

	.all_text{
		color: black;
		
	}
</style>

<body>
	<div class="container menu_details animate-box">

		{{-- menu img and description starts --}}
		<div class="row animate-box">

			<div class="col-sm-6">
				@if ($viewMenu->menu_image)
                    <img src="{{ asset('uploads/meal/'. $viewMenu->menu_image) }}" class="img-fluid meal_img" alt="category image">
                @endif
			</div>

			<div class="col-sm-6">
				<h1 style="margin-top: 50px; color:#003366; font-weight: bold; text-transform:capitalize;">{{ $viewMenu->menu_title }} - Menu Details </h1>

				<p>{{ $viewMenu->menu_description }}</p>
				

			</div>

			<div class="d-flex justify-content-center" style="margin-top: 20px;">
				<a href="{{ route('partner#updateMenu', $viewMenu->id) }}" class="border p-3 btn-success mx-2" >Update Menu</a>
				<a href="{{ route('partner#deleteMenu', $viewMenu->id) }}" class="border p-3 btn-danger mx-2" >Delete Menu</a>
			</div>
			

		</div>
		{{-- menu img and description ends --}}

		<hr>
		{{-- allergens & info starts --}}
		<h3 style="margin-top: 50px; color:#003366; font-weight: bold; text-transform:capitalize;">Allergens + nutritional information </h3>
		<div class="row">
			{{-- allergens --}}
			<div class="col-sm-4">
				<h4 class="text-danger" style="font-weight: bold;">Allergens</h4>
				<p class="all_text">{{ $viewMenu->menu_allergens }}</p>
			</div>

			{{-- infomation --}}
			<div class="col-sm-8">
				<h4 class="text-danger" style="font-weight: bold;">Nutritional Information</h4>
				<p class="all_text">The detail nutritional information for this meal are as follows: <br>
					{{ $viewMenu->menu_nutritions }}
				</p>
				
				<a href="{{ route('partner#foodSafety') }}" style="text-decoration: underline; color:#003366;">Click here to view food safety standards -> </a>
			</div>
		</div>
		{{-- allergens & info ends --}}
	</div>
</body>
		{{-- <div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3><h1>{{ $viewMenu->menu_title }}</h1></h3>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
                    <div class="container">
                        <div class="row">
                            <div class="jumbotron animate-box">
								<div class="form-floating mb-3" style="padding-bottom: 50px">
									@if ($viewMenu->menu_image)
										<img src="{{ asset('uploads/meal/'. $viewMenu->menu_image) }}" class="img-thumbnail" alt="category image ">
										<br>
									@endif
								</div>
								<div class="feature-text animate-box">
                                	<h1>{{ $viewMenu->menu_title }}</h1>
                                	<p>{{ $viewMenu->menu_description }}</p>
								</div>
								<div class="col">
									<div class="form-group animate-box">
										<a href="{{ route('partner#foodSafety') }}"> <input type="submit" value="Food Safety" class="btn btn-primary"></a>
									</div>
								</div>
                              </div>
                        </div>						
                    </div>
					<div class="row animate-box">
						<div class="col-sm-1">
							<div class="form-group animate-box">
								<a href="{{ route('partner#updateMenu', $viewMenu->id) }}"> <input type="submit" value="Update" class="btn btn-primary"></a>
							</div>
						</div>
						<div class="col-sm-3" style="padding-left: 50px">
							<div class="form-group animate-box">
								<a href="{{ route('partner#deleteMenu', $viewMenu->id) }}"> <input type="submit" value="Delete" class="btn btn-primary"></a>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
			
		</div> --}}
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