@extends('frontend.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(count($orders) > 0)
                <div class="card shadow-lg">
                    <div class="card-header text-white text-left" style="background-color: #701B19;">
                        <h4 class="ml-4">My Orders</h4>
                    </div>
                    <div class="card-body table-responsive p-4">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>S.N</th>
                                    <th>Tracking Id</th>
                                    <th>Total Price</th>
                                    <th>Ordered Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $index => $order)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td><a href="{{ url('view-order/'.$order->id) }}" class="text-info">{{ $order->tracking_no }}</a></td>
                                        <td>Rs.{{ number_format($order->totalPrice, 2) }}</td>
                                        <td>{{ date('Y-m-d', strtotime($order->created_at)) }}</td>
                                        <td>
                                            @if ($order->status == 0)
                                                <span class="badge bg-warning text-dark">Processing</span>
                                            @elseif ($order->status == 1)
                                                <span class="badge bg-success">Delivered</span>
                                            @elseif ($order->status == 2)
                                                <span class="badge bg-danger">Cancelled</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('view-order/'.$order->id) }}" class="btn btn-outline-primary btn-sm">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="alert alert-info mt-5 text-center">
                    <p>You haven't placed any orders yet. Explore our menu and place your first order!</p>
                    <a href="{{ url('menu') }}" class="btn btn-info">Explore Menu</a>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
