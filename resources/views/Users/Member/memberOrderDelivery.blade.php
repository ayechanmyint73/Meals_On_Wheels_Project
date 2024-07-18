@extends('Users.Member.layouts.app')

@section('title', 'Order Details - Member')

@section('content')
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-secondary text-center mb-5 display-5">Order Details - Member</h1>

                <!-- Latest Order and Delivery Status -->
                @if($orderData)
                <div class="mt-5 p-4">
                    <h2 class="text-secondary text-center mb-5 display-5">Latest Order Details</h2>
                    <div class="row">
                        <div class="mb-5 col-md-12">
                            <a href="{{ route('member#viewAllMenu') }}" class="btn btn-primary">Order Meal</a>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Partner Name</th>
                                            <th scope="col">Meal Name</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Order Time</th>
                                            <th scope="col">Menu Preparation Status</th>
                                            <th scope="col">Assigned Rider</th>
                                            <th scope="col">Delivery Status</th>
                                            <th scope="col">Confirm Receive</th>
                                            <th scope="col">Feedback</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $orderData->id }}</td>
                                            <td>{{ $orderData->order_menu_restaurant }}</td>
                                            <td>{{ $orderData->order_menu_name }}</td>
                                            @php
                                                $str = $orderData->created_at;
                                                $newstr = explode(" ", $str);
                                                $date = $newstr[0];
                                                $time = $newstr[1];
                                            @endphp
                                            <td>{{ $date }}</td>
                                            <td>{{ $time }}</td>
                                            <td>{{ $orderData->order_cooking_status }}</td>
                                            <td>{{ $deliverData->volunteer_name }}</td>
                                            <td>{{ $deliverData->delivery_status }}</td>
                                            <td>
                                                @if($orderData->order_received_status == 'Received')
                                                    <button class="btn btn-success" disabled>Received</button>
                                                @else
                                                    <form id="receiveForm" action="{{ route('member#updateMemberOrder', $orderData->id) }}" method="GET">
                                                        <input type="hidden" name="order_received_status" value="Received">
                                                        <button id="receiveButton" type="submit" class="btn btn-primary">Order Received</button>
                                                    </form>
                                                @endif
                                            </td>
                                            <td>
                                                @if($orderData->order_received_status == 'Received')
                                                    @if($orderData->feedback)
                                                        <a href="{{ route('feedback.show', $orderData->id) }}" class="btn btn-info">View Feedback</a>
                                                    @else
                                                        <a href="{{ route('feedback.create', $orderData->id) }}" class="btn btn-success">Give Feedback</a>
                                                    @endif
                                                @else
                                                    <span class="text-muted">Not yet received</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- All Orders -->
                <div class="mt-5 p-4">
                    <h2 class="text-secondary text-center mb-5 display-5">All Orders History</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Partner Name</th>
                                    <th scope="col">Meal Name</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Time</th>
                                    <th scope="col">Delivery Status</th>
                                    <th scope="col">Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->order_menu_restaurant }}</td>
                                    <td>{{ $order->order_menu_name }}</td>
                                    @php
                                        $str = $order->created_at;
                                        $newstr = explode(" ", $str);
                                        $date = $newstr[0];
                                        $time = $newstr[1];
                                    @endphp
                                    <td>{{ $date }}</td>
                                    <td>{{ $time }}</td>
                                    <td>{{ $order->delivery_status }}</td>
                                    <td>
                                        @if($order->order_received_status == 'Received')
                                            @if($order->feedback)
                                                <a href="{{ route('feedback.show', $order->id) }}" class="btn btn-info">View Feedback</a>
                                            @else
                                                <a href="{{ route('feedback.create', $order->id) }}" class="btn btn-success">Give Feedback</a>
                                            @endif
                                        @else
                                            <span class="text-muted">Not yet received</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
