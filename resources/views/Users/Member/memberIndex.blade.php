@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')

<body>
    <div class="container m4" >
        @if (Session::has('orderCreated'))
            <div class="alert alert-warning animate-box" role="alert">
                {{ Session::get('orderCreated') }}<a href="{{ route('order#showOrderDelivery', Auth()->user()->id) }}"> Click here to view your order delivery status</a>
            </div>
        @endif
    
        @if(($memberData->member_meal_duration ?? 0)== 0)
        <div class="alert alert-warning animate-box" role="alert">
            Please Undergo Reassesment to continue with your 30 days meal plan<a href="{{ route('member#reassesment', Auth()->user()->id) }}"> Click here to apply for reassesment</a>
        </div>
        @endif 
        
    <h1>Member Details</h1>
    
    
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
</body>

@endsection