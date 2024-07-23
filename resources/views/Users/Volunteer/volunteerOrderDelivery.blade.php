@section('title')
    Delivery Status - Volunteer
@endsection

@extends('Users.Volunteer.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Status - Volunteer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div id="" class="container mx-auto px-4 py-8">
        <div class="">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">
                    Delivery Status - Volunteer
                </h1>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Member Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Meal Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Restaurant</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Restaurant Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rider</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Delivery Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delivery Status</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($deliveryData as $delivery)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $delivery->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $delivery->member_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $delivery->member_address }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $delivery->partner_restaurant_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $delivery->partner_address }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ explode(' ', $delivery->created_at)[0] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ explode(' ', $delivery->created_at)[1] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('deliver#updateDelivery', $delivery->id) }}" method="GET" class="flex items-center space-x-2">
                                        <input type="text" name="volunteer_name" value="{{ $delivery->volunteer_name }}" readonly class="border rounded px-2 py-1 text-sm"/>
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-1 rounded">Accept</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('deliver#updateDelivery', $delivery->id) }}" method="GET" class="flex items-center space-x-2">
                                        <input type="text" name="start_deliver_time" value="{{ $delivery->start_deliver_time }}" readonly class="border rounded px-2 py-1 text-sm"/>
                                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-sm px-3 py-1 rounded">Start</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('deliver#updateDelivery', $delivery->id) }}" method="GET" class="flex items-center space-x-2">
                                        <select name="delivery_status" class="border rounded px-2 py-1 text-sm">
                                            <option value=""></option>
                                            <option value="Pick the meal">Pick up the meal</option>
                                            <option value="On the way to destination">On the way to destination</option>
                                            <option value="Arrived at destination">Arrived at destination</option>
                                        </select>
                                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm px-3 py-1 rounded">Send Status</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection