@section('title')
	{{ $viewMenu->menu_title }} Details
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<?php $partner_id = DB::table('menus')->where('id',$viewMenu->id)->value('partner_id');
										//echo $partner_id;
										$partner_user_id = DB::table('partners')->where('id',$partner_id)->value('user_id');
										//echo $partner_user_id;
										$partner_geolocation = DB::table('users')->where('id',$partner_user_id)->value('geolocation');
										//echo $partner_geolocation;
										$user_geolocation = DB::table('users')->where('id',Auth()->user()->id)->value('geolocation');
										//echo $user_geolocation;

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

									if ($DistanceKM > 10 ) {
										$message ="Out Of Delivery Range";
									}else{
										$message ="Within Delivery Range";
									}
							
										$weekday=date("w");
										//  echo $weekday."<br>";
										if ($weekday == 0 ||$weekday == 6 ) {
											if ($DistanceKM > 10) {
												$meal_type = "Frozen";
												$message = "This Meal is available today";
											}else{
												// sat or sun and distance less than 10 km
												$meal_type = "Hot";
												$message = "This Meal available only from Monday through Friday";
											}
										}else{
											if ($DistanceKM > 10) {
												$meal_type = "Frozen";
												$message = "Support over weekend only";
											}else{
												$meal_type = "Hot";
												$message = "This Meal is available today";
											}
										}

									
						 ?>
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3><h1>{{ $viewMenu->menu_title }}</h1></h3>
					<div class="alert alert-warning animate-box" role="alert">
						<?php echo$message." and ".$meal_type." meal will be provided based on your distance"; ?> 
					</div>
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
								<div class="feature-text animate-box">
                                	<h3>Time Availability</h3>
                                	<p><?php echo $message; ?></p>
								</div>
								<div class="feature-text animate-box">
                                	<h3>Meal Type</h3>
                                	<p><?php echo $meal_type; ?></p>
								</div>
								
								<div class="col">
									<div class="form-group animate-box">
										<a href="{{ route('member#foodSafety') }}"> <input type="submit" value="Food Safety" class="btn btn-primary"></a>
									</div>
								</div>
                              </div>
                        </div>
						
                    </div>
										
										@if( $memberData->member_meal_duration != 0 )
										@if($message == "This Meal is available today")
										<div class="row animate-box">
											<div class="col-sm-1">
												<div class="form-group animate-box">
													<a href="{{ route('member#orderConfirmation', [ 'partner_id' => $viewMenu -> partner_id, 'menu_id' => $viewMenu-> id, 'user_id' => Auth()->user()->id]) }}"> <input type="submit" value="Order" class="btn btn-primary"></a>
												</div>
											</div>
										</div>
										@endif
										@endif
				
				</div>
				
			</div>
		</div>
			
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