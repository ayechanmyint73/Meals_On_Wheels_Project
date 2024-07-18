@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')

<div class="container m4" >
    @if (Session::has('orderCreated'))
		<div class="alert alert-warning animate-box" role="alert">
			{{ Session::get('orderCreated') }}<a href="{{ route('order#showOrderDelivery', Auth()->user()->id) }}"> Click here to view your order delivery status</a>
		</div>
	@endif

    @if($memberData->member_meal_duration == 0)
    <div class="alert alert-warning animate-box" role="alert">
        Please Undergo Reassesment to continue with your 30 days meal plan<a href="{{ route('member#reassesment', Auth()->user()->id) }}"> Click here to apply for reassesment</a>
    </div>
    @endif
    
    <h1>Member Details</h1>
<table class="table table-bordered" >

    <thead>
        <tr>
        <th>No.</th>
        <th>Caregiver Name</th>
        <th>Caregiver Relation</th>
        <th>Member Medical Condition</th>
        <th>Meal Duration</th>
        {{-- <th>Action</th> --}}
        </tr>
    </thead>

    <tbody>
       
            <tr>
                <td>{{ $memberData->id }}</td>
                <td>{{ $memberData->member_caregiver_name }}</td>
                <td>{{ $memberData->member_caregiver_relation }}</td>
                <td>{{ $memberData->member_medical_condition }}</td>
                <td>{{ $memberData->member_meal_duration }} days left</td>
            </tr>
        
    </tbody>
</table>
</div>

<div id="fh5co-page">
        
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/logan-weaver-lgnwvr-lK0l9pzxLps-unsplash.jpg);">
            <div class="desc animate-box">
                <h2><strong>Start</strong> Getting Meals <strong> Today!</strong></h2>
        
                <span><a class="btn btn-primary btn-lg" href="{{ route('member#viewAllMenu') }}">View Menu</a></span>
            </div>
        </div>

    </div>
</div>

@endsection