@section('title')
    Order Status - Member
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<body>
    <!-- main  -->
    <div class="fh5co-services-section">
      <div class="container-fluid pt-4">
          <div class="row">
              <div class="delivery-status">
                  <div class="col-md-12 offset-md-0">
                      <div class="mt-5 p-4">
                          <h1 class="text-secondary text-center mb-5 display-5">
                              Order Status - Member
                          </h1>
                <div class="row">
                  <div class="mb-5 col-md-12">
                    <a href="{{ route('member#viewAllMenu') }}" class="btn btn-primary"
                      >Order Meal</a
                    >
                  </div>
                  <table class="table table-responsive table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Partner Name</th>
                        <th>Meal Name</th>
                        <th>Order Date</th>
                        <th>Order Time</th>
                        <th>Menu Preparation Status</th>
                        <th>Assigned Rider</th>
                        <th>Delivery Status</th>
                        <th>Confirm Receive</th>
                        <th>Feedback</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>{{ $orderData ->id }}</td>
                        <td>{{ $orderData -> order_menu_restaurant }}</td>
                        <td>{{ $orderData -> order_menu_name }}</td>
                        <?php 
                            $str = $orderData -> created_at;
                            $newstr = explode(" ", $str);
                            $date = $newstr[0];
                            $time = $newstr[1];
                        ?>
                        <td><?php echo $date;  ?></td>
                        <td><?php echo $time;  ?></td>
                        <td>{{ $orderData -> order_cooking_status }}</td>
                        <td>{{ $deliverData -> volunteer_name }}</td>
                        <td>{{ $deliverData -> delivery_status }}</td>
                        <td>
                          <form action="{{ route('member#updateMemberOrder', $orderData ->id) }}" method="GET" >
                            <input type="text" name="order_received_status" value="{{ $orderData -> order_received_status}}" readonly/>
                            <button  type="submit" class="btn btn-primary">Received?</button>
                            </form>
                        </td>
                        <td>
                          @if($orderData->order_received_status == 'Received')
                            <a href="{{ route('feedback.create', $orderData->id) }}" class="btn btn-success">Give Feedback</a>
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
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>


@endsection