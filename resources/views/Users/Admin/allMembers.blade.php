@section('title')
    Welcome Admin
@endsection

@extends('Users.Admin.layouts.app')

@section('content')

<style>
	.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
	transition: 0.3s;
	}

	.thumb-lg {
		height: 88px;
		width: 88px;
		margin-bottom: 15px;
	}
	.img-thumbnail {
		padding: .25rem;
		background-color: #fff;
		border: 1px solid #dee2e6;
		border-radius: .25rem;
		max-width: 100%;
		height: auto;
	}
	.text-pink {
		color: #ff679b!important;
	}
	.btn-rounded {
		border-radius: 2em;
	}
	.text-muted {
		color: #98a6ad!important;
	}
	h4 {
		line-height: 22px;
		font-size: 18px;
	}
	
</style>

<body>
	<div class="container-fluid">
		<h1 class="text-center" style="text-align: center; color:#003366; font-weight: bold; padding: 25px 0;">Members and Caregivers Information</h1>

		@if (Session::has('dataInform'))
			<h4 class="alert alert-warning animate-box" role="alert">
				{{ Session::get('dataInform') }}
			</h4>
		@endif

		<div class="row">

			@foreach ($memberData as $member)
			<div class="col-lg-4">
				<div class="text-center card-box animate-box">
					<div class="member-card pt-2 pb-2">
						<div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
						<div class="">
							<h4 style="text-transform: capitalize;">{{ DB::table('users')->where('id',$member->user_id)->value('name')}} - <span>{{ DB::table('users')->where('id',$member->user_id)->value('role')}}</span></h4>
							<p class="text-muted">Age - {{ DB::table('users')->where('id',$member->user_id)->value('age')}} <span>| </span> <span class="text-pink">{{ DB::table('users')->where('id',$member->user_id)->value('email')}}</span></p>
							<p>Address - {{ DB::table('users')->where('id',$member->user_id)->value('address')}}</p>
							<p>Duration - {{ $member->member_meal_duration }} days</p>
							<p>Extend Reasons - {{ $member->member_extends_reason }}</p>
						</div>
						
						<a href="{{ route('admin#updateMembers', $member->user_id) }}" class="btn btn-primary">
							<i class="icon-edit"> </i> Edit Info
						</a>
						<a href="{{ route('admin#deleteMember', $member->user_id) }}" class="btn btn-danger">
							<i class="icon-trash"></i> Delete Info
						</a>
					</div>
					
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body>

@endsection