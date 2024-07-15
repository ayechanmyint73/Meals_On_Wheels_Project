@section('title')
    Welcome Admin
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
			<div class="container">
				@if (Session::has('dataInform'))
				<h4 class="alert alert-warning animate-box" role="alert">
					{{ Session::get('dataInform') }}
				</h4>
			@endif
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Members and Care Givers</h3>
						<p>All the members that registered to MerryMeals charity</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					@foreach ($memberData as $member)
						<div class="col-md-4 col-sm-4">
							<div class="services animate-box">
								<span><i class="icon-profile-male"></i></span>
								{{-- <h3>{{ $member->user_id->name}}</h3> --}}
								<h3>{{ DB::table('users')->where('id',$member->user_id)->value('name')}}</h3>
								<h4>{{ $member->member_caregiver_name }}</h4>
								<p>{{ DB::table('users')->where('id',$member->user_id)->value('address')}}</p>
								<p>{{ DB::table('users')->where('id',$member->user_id)->value('email')}}</p>
								<p>Duration: {{ $member->member_meal_duration }}</p>
								<p>
									Extends Reason: {{ $member->member_extends_reason }}
								</p>

								<span>
									<a href="{{ route('admin#updateMembers', $member->user_id) }}">
										<i class="icon-edit"> </i>
									</a>
									<a href="{{ route('admin#deleteMember', $member->user_id) }}">
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