@section('title')
    Menu Management
@endsection

@extends('Users.Partner.layouts.app')

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

<style>
    .cover{
        width: 100%;
        height: auto;
    }
    
    .cover-img{
        width: 100%;
        min-height: 700px;
        position: relative;
        display: flex;
        align-items: center; 
        justify-content: center;
    }

    .cover-img img{
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: -1;
    }

    .cover-btn{
        padding: 15px;
        width: 200px;
        font-size: 16px;
        border-radius: 50px;
        border: none;
        align-items: center;
        justify-content: center;
        margin: 10px;
        background-color: #2F4B26;
        color: white;
    }

    .cover-btn:hover{
        box-shadow: 10px 20px 30px rgba(89, 89, 89, 0.3);
        cursor: pointer;
    }

    .add_btn{
        background-color:  #2F4B26;
        color: white;
        padding: 10px 25px;
        border-radius: 10px;
    }

    .add_btn:hover{
        opacity: 0.7;
        color: black;
    }

    .cover_img{
        padding: 0;
        margin: 0;
    }

    .main_btn{
        background-color: #2F4B26;
        color: white;
    }

    .main_btn:hover{
        cursor: pointer;
    }

    .view_btn{
        background-color: #2F4B26;
        color: white;
    }
    .tdy_menu{
        padding-bottom: 30px;
    }
</style>

<body>
    <div class="container-fluid cover_img">
        <div class="cover-img">
            <img src="images/partner_cover_img.webp" class="img-fluid" alt="cover image">
            <button class="cover-btn animate-box"><a href="#" style="color: white; font-size: 18px;">Manage Information</a></button>
        </div>
    </div>


    <div class="container tdy_menu">
        <div class="row">
            <div class="col-sm-10">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 style="margin-top: 50px; color:#003366; font-weight: bold; text-transform:capitalize;">Today's Menu</h3>
                    <a href="{{ route('partner#createMenu') }}" class="border add_btn ">Add New Menu</a>
                </div>  
                
                @if (Session::has('menuCreated'))
					<div class="alert alert-success animate-box" role="alert">
						{{ Session::get('menuCreated') }}
					</div>
				@endif
				@if (Session::has('menuDeleted'))
					<div class="alert alert-danger animate-box" role="alert">
						{{ Session::get('menuDeleted') }}
					</div>
				@endif
				@if (Session::has('updateData'))
                    <div class="alert alert-success animate-box" role="alert">
                        {{ Session::get('updateData') }}
                    </div>
                @endif
                
                @foreach ($menuData as $menu)
                    <div class="card mb-3 shadow lg p-3 bg-white rounded animate-box">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" alt="menu images">
                            </div>
                            <div class="col-md-8 ">
                                <div class="card-body">
                                    <h3 class="card-title" style="text-transform: capitalize;">{{ $menu->menu_title }}</h3>
                                    <p class="card-text">{{ $menu->menu_description }}</p>

                                    @if ( Auth::user() -> role == 'partner')
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('partner#viewMenu', $menu->id) }}" class="border p-2 view_btn">View Menu</a>
                                        <a href="{{ route('partner#updateMenu', $menu->id) }}" class="border btn-success p-2">Update Menu</a>
                                        <a href="{{ route('partner#deleteMenu', $menu->id) }}" class="border btn-danger p-2">Delete Menu</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="col-sm-2  animate-box">
                <h3 style="margin-top: 50px; color:#003366; font-weight: bold; text-transform:capitalize;">Note</h3>
				<textarea class="form-control shadow lg p-3 rounded" id="" cols="30" rows="20" placeholder="Your message..." required></textarea>
            </div>
        </div>
    </div>
</body>

		{{-- <div class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" style="padding-top: 50px;">
						<h3>Menus</h3>
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
				<div class="col-md-4" style="padding-top:50px">
					<div class="fh5co-team text-center animate-box">
						<img class="img-thumbnail" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width:300px; height:200px;" alt="menu images">
						<div>
							<h1>{{ $menu->menu_title }}</h1>
							<p>{{ $menu->menu_description }}</p>
							@if ( Auth::user() -> role == 'partner')
								<p><a href="{{ route('partner#updateMenu', $menu->id) }}">Update Menu >>></p>
								<p><a href="{{ route('partner#deleteMenu', $menu->id) }}">Delete Menu >>></a></p>
							@endif
						</div>
					</div>
				</div>
				</a>
				@endforeach
			</div>
		</div> --}}

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