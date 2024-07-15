@section('title')
    Welcome
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Partners</h3>
						<p>All the partners that registered to paticipate in MerryMeals charity</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					@foreach ($partnerData as $partner)
                    <div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-profile-male"></i></span>
							@if (Session::has('partnerDeleted'))
							<h4 class="alert alert-warning animate-box" role="alert">
								{{ Session::get('partnerDeleted') }}
							</h4>
							@endif
							<h3>{{ $partner->partnership_restaurant }}</h3>
							<p>{{ DB::table('users')->where('id',$partner->user_id)->value('address')}}</p>
                            <p>{{ DB::table('users')->where('id',$partner->user_id)->value('phone')}}</p>
							<p>{{ DB::table('users')->where('id',$partner->user_id)->value('email')}}</p>
							<p>Duration: {{ $partner->partnership_duration }}</p>
							<span>
								<a href="{{ route('admin#updatePartner', $partner->user_id) }}">
									<i class="icon-edit"> </i>
								</a>
								<a href="{{ route('admin#deletePartner', $partner->user_id) }}">
									<i class="icon-trash"></i>
								</a>
							</span>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection