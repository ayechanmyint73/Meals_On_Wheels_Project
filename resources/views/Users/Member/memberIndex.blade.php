@section('title')
    Dashboard | MerryMeals - Meals on Wheels
@endsection

@extends('Users.Member.layouts.app')

@section('content')

<style>
    .feature-left {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    .feature-left .icon {
        margin-bottom: 10px;
    }

    .feature-left .feature-copy {
        flex: 1;
    }

    .feature-left .feature-copy h2 {
        margin-bottom: 15px;
    }

    .feature-left .feature-copy p {
        margin-bottom: 15px;
    }

    .feature-left .btn {
        margin-top: auto;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .card-header {
        font-weight: bold;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .calendar {
        margin-bottom: 20px;
    }

    .quote {
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .quote-header {
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
        margin-bottom: 10px;
    }

    .quote-body {
        text-align: center;
        font-style: italic;
    }
</style>

<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css' rel='stylesheet' />

<body>
    <div class="container m4">
        @if (Session::has('orderCreated'))
            <div class="alert alert-warning animate-box" role="alert">
                {{ Session::get('orderCreated') }}<a href="{{ route('order#showOrderDelivery', Auth()->user()->id) }}"> Click here to view your order delivery status</a>
            </div>
        @endif
    
        @if(($memberData->member_meal_duration ?? 0)== 0)
            <div class="alert alert-warning animate-box" role="alert">
                Please undergo reassessment to continue with your 30 days meal plan<a href="{{ route('member#reassesment', Auth()->user()->id) }}"> Click here to apply for reassessment</a>
            </div>
        @endif 

        <div id="fh5co-page">
            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/logan-weaver-lgnwvr-lK0l9pzxLps-unsplash.jpg);">
                    <div class="desc animate-box">
                        <h2><strong>Start</strong> Getting Meals <strong> Today, {{ Auth()->user()->name }}</strong></h2>
                        <span><a class="btn btn-primary btn-lg" href="{{ route('member#viewAllMenu') }}">View Menu</a></span>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <h1 class="text-center mb-4">Dashboard</h1>

        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="card feature-center">
                    <div class="feature-copy">
                        <h2>View Menu</h2>
                        <p>Explore the available meal options and choose your meals for the week.</p>
                        <a href="{{ route('member#viewAllMenu') }}" class="btn btn-primary">View Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="card calendar">
                    <div class="card-header">Calendar</div>
                    <div id="calendar"></div>
                </div>
                <div class="quote">
                    <div class="quote-header">Quote of the Day</div>
                    <div class="quote-body">"I love food deliveries because it's like having a personal chef, except I never have to see their judgmental eyes when I order my third pizza of the week." - Admin</div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
    </script>
</body>

@endsection