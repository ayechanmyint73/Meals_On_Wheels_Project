@extends('layouts.app')

@section('title', 'Choose Interest')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h1 style="text-align: center; color:#003366; font-weight: bold; margin: 25px 0;">Select Your Interest</h1>
    </div>
    <div class="row justify-content-center">
        <!-- Member Box -->
        <div class="col-md-4 mb-4">
            <a href="{{ route('register.form') }}?interest=member" class="interest-box">
                <img src="{{ asset('images/member.jpg') }}" alt="Member" class="img-fluid">
                <h3>Be a Member</h3>
            </a>
        </div>
        
        <!-- Volunteer Box -->
        <div class="col-md-4 mb-4">
            <a href="{{ route('register.form') }}?interest=volunteer" class="interest-box">
                <img src="{{ asset('images/volunteer.jpeg') }}" alt="Volunteer" class="img-fluid">
                <h3>Volunteer</h3>
            </a>
        </div>
        
        <!-- Partner Box -->
        <div class="col-md-4 mb-4">
            <a href="{{ route('register.form') }}?interest=partner" class="interest-box">
                <img src="{{ asset('images/partner3.jpg') }}" alt="Partner" class="img-fluid">
                <h3>Partner</h3>
            </a>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .interest-box {
        display: flex; 
        flex-direction: column; 
        align-items: center; 
        justify-content: center; 
        text-decoration: none;
        color: #000;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        transition: background-color 0.3s ease;
        margin-bottom: 20px; 
        height: 300px; 
    }

    .interest-box:hover {
        background-color: #f0f0f0;
    }

    .interest-box img {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
        border-radius: 8px;
    }

    .interest-box h3 {
        margin-top: 10px;
        font-size: 1.25rem;
        text-align: center; 
    }
</style>
@endsection
