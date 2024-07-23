@extends('Users.Volunteer.layouts.app')

@section('title')
    Dashboard | MerryMeals - Meals on Wheels
@endsection

@section('content')
<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-header {
        font-weight: bold;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .card-body {
        padding: 15px;
    }

    .card-footer {
        border-top: 1px solid #ccc;
        padding: 10px;
        background-color: #f8f9fa;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table thead th {
        background-color: #f8f9fa;
        color: #495057;
        font-weight: bold;
        text-transform: uppercase;
    }

    .table tbody td {
        color: #495057;
    }

    .table-container {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .container {
        margin: 0 auto;
        padding: 20px;
        max-width: 1200px;
    }

    .text-center {
        text-align: center;
    }

    .text-gray-800 {
        color: #343a40;
    }

    .text-gray-500 {
        color: #6c757d;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .font-bold {
        font-weight: bold;
    }

    .font-medium {
        font-weight: 500;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mb-8 {
        margin-bottom: 2rem;
    }

    .animate-box {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
    }

    .animate-box.in-view {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.querySelectorAll('.animate-box');
        var observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                }
            });
        }, { threshold: 0.1 });
        
        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

<div class="container m4">
    <h1 class="text-center mb-4">Volunteer Details</h1>
    <div class="card animate-box">
        <div class="card-header">
            Volunteer Details
        </div>
        <div class="card-body">
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Vaccination Status</th>
                            <th>Volunteer Duration</th>
                            <th>Available Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <?php 
                                $vacc =  $volunteerData->volunteer_vaccination;
                                $vacc_status = ($vacc == 0) ? "Yes" : "No";
                            ?>
                            <td><?php echo $vacc_status; ?></td>
                            <td>{{ $volunteerData->volunteer_duration }}</td>
                            <td>{{ $volunteerData->volunteer_available }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="fh5co-page">
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/tim-marshall-cAtzHUz7Z8g-unsplash.jpg);">
                <div class="desc animate-box">
                    <h2><strong>Aim to</strong> Give Meals <strong>To Those in Need</strong></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Delivery Status Section -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center mb-4">Delivery Status - Volunteer</h1>
        <div class="card animate-box">
            <div class="card-header">
                Delivery Status - Volunteer
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Member Name</th>
                                <th>Meal Name</th>
                                <th>Restaurant</th>
                                <th>Restaurant Address</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Rider</th>
                                <th>Start Delivery Time</th>
                                <th>Delivery Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deliveryData as $delivery)
                            <tr>
                                <td>{{ $delivery->id }}</td>
                                <td>{{ $delivery->member_name }}</td>
                                <td>{{ $delivery->deliver_menu_name }}</td>
                                <td>{{ $delivery->partner_restaurant_name }}</td>
                                <td>{{ $delivery->partner_address }}</td>
                                <td>{{ explode(' ', $delivery->created_at)[0] }}</td>
                                <td>{{ explode(' ', $delivery->created_at)[1] }}</td>
                                <td>{{ $delivery->volunteer_name }}</td>
                                <td>{{ $delivery->start_deliver_time }}</td>
                                <td>{{ $delivery->delivery_status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <!-- Optionally add some footer content if needed -->
            </div>
        </div>
    </div>
</div>
@endsection
