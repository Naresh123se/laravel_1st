@extends('frontend.master')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Order Details: {{$orders->tracking_no}}</h4>
                </div>
                <div class="card-body">
                    <div class="row" style="text-align: left">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <div class="border rounded p-3">{{ $orders->fname }}</div>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <div class="border rounded p-3">{{ $orders->lname }}</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="border rounded p-3">{{ $orders->email }}</div>
                            </div>

                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <div class="border rounded p-3">{{ $orders->phone }}</div>
                            </div>

                            <div class="mb-3">
                                <label for="delivery_address" class="form-label">Delivery Address</label>
                                <div class="border rounded p-3">{{ $orders->address }}</div>
                            </div>

                            <div class="mb-3">
                                <label for="payment" class="form-label">Payment Method</label>
                                <div class="border rounded p-3">
                                    @if($orders->payment == 'cash_on_delivery')
                                        <p>Cash on Delivery</p>
                                    @elseif($orders->payment == 'paypal')
                                        <button class="btn btn-sm btn-primary" type="button">PayPal</button>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderItems as $index => $order)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{ asset('storage/'.$order->product->product_image) }}" width="50px" alt="Product Image"></td>
                                        <td>{{ $order->product->name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>Rs.{{ $order->price }}</td>
                                        <td>Rs.{{ $order->quantity * $order->price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-light">
                    <p class="text-end" style="font-weight:700; font-size: 1.2rem">Grand Total: Rs {{ $orders->totalPrice }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
