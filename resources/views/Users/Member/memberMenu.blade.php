@section('title')
    All Menu
@endsection

@extends('Users.Member.layouts.app')

@section('content')		
<style>

	/* .topright {
		position: absolute;
		top: 8px;
		right: 16px;
		font-size: 18px;
	}

	.topleft {
		position: absolute;
		top: 8px;
		left: 16px;
		font-size: 18px;
	} */

	p{
		padding: 0;
		margin: 0;
	}

	.card-title{
		text-align: center;
		font-size: 20px;
		text-transform: uppercase;
		font-weight: bold;
		padding: 8px 0;
	}

	.card-text{
		padding: 5px 0;
	}

	.menu_btn{
		width: 100%;
		background-color: #2F4B26;
		color: white;
		padding: 10px 25px;
		margin-top: 30px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

</style>
	<body>
		<div class="">
			{{-- title & warning starts --}}
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<h1 style="margin-top: 50px; color:#003366; font-weight: bold;">Menus</h1>
					</div>
				</div>
				<div class="alert alert-warning animate-box" role="alert">
					<p>Based on your current location, the menu is available according to the day you are ordering and if your distance is within 
						10 km from our food service partners.
					</p>
				</div>
			</div>
			{{-- title & warning ends --}}

			{{-- menu item starts --}}
			<div class="container">				
				
				{{-- menu row starts --}}
				<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						{{-- looping for each menu starts --}}
						@foreach ($menuData as $menu)
							<div class="card h-100">

								<img src="{{ asset('uploads/meal/' . $menu->menu_image) }}" class="card-img-top" alt="menu image" width="100%" height="300px;">

								<?php $partner_id = DB::table('menus')->where('id',$menu->id)->value('partner_id');
													
													$partner_user_id = DB::table('partners')->where('id',$partner_id)->value('user_id');
													
													$partner_geolocation = DB::table('users')->where('id',$partner_user_id)->value('geolocation');
													
													$user_geolocation = DB::table('users')->where('id',Auth()->user()->id)->value('geolocation');
													
										$user_arr = preg_split ("/\,/", $user_geolocation); 
															$partner_arr = preg_split ("/\,/", $partner_geolocation);
									
										$Lat1 = $user_arr[0];
										$Long1 =  $user_arr[1];
										$Lat2 = $partner_arr[0] ;
										$Long2 = $partner_arr[1];
										$DistanceKM = 0;
										$DistanceMeter = 0;

										if (isset($_POST['Lat1'])) {
										$Lat1 = $_POST['Lat1'];
										$Long1 = $_POST['Long1'];
										$Lat2 = $_POST['Lat2'];
										$Long2 = $_POST['Long2'];
										}

										$R = 6371;

										$Lat = $Lat2 - $Lat1;
										$Long = $Long2 - $Long1;

										$dLat1 = deg2rad($Lat);
										$dlong1 = deg2rad($Long);

										$a =
										sin($dLat1 / 2) * sin($dLat1 / 2) +
										cos(deg2rad($Lat1)) * cos(deg2rad($Lat2)) *
										sin($dlong1 / 2) * sin($dlong1 / 2);

										$c = 2 * atan2(sqrt($a), sqrt(1 - $a));

										$DistanceKM = $R * $c;

										$DistanceMeter = $DistanceKM * 1000;

										$DistanceKM = round($DistanceKM, 3);

															$weekday=date("w");
															
															if ($weekday == 0 ||$weekday == 6 ) {
																if ($DistanceKM > 10) {
																	$meal_type = "Cold";
																	$message = "This Meal is available today";
																}else{
																	// sat or sun and distance less than 10 km
																	$meal_type = "Hot";
																	$message = "This Meal available only from Monday through Friday";
																}
															}else{
																if ($DistanceKM > 10) {
																	$meal_type = "Cold";
																	$message = "Support over weekend only";
																}else{
																	$meal_type = "Hot";
																	$message = "This Meal is available today";
																}
															}
								?>

								<div class="card-body">
									{{-- <p class="text-right">{{ $meal_type }}</p>
									<p class="text-left"><?php echo $DistanceKM; ?>Km&nbsp;near you</p> --}}

									<h5 class="card-title">{{ $menu->menu_title }}</h5>
									<p class="card-text"><span style="color: black; font-weight: bold;">Description:</span> {{ $menu->menu_description }}</p>
									<p style="margin-top: 5px; color:red; text-align:center;" ><?php echo $message; ?></p>

									<a href="{{ route('member#viewMenu', $menu->id) }}" class="menu_btn">See more</a>
								</div>
							</div>

							</div>
						@endforeach
						{{-- looping for each menu ends --}}
					</div>
				</div>
				{{-- menu row ends --}}
			</div>
			{{-- menu item ends --}}
		</div>
	</body>
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

