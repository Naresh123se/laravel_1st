@extends('frontend.master')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('updateprofile/'.$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="font-weight-bold">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="font-weight-bold">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="{{$user->phone}}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="font-weight-bold">Address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="5" placeholder="Address">{{$user->address}}</textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="font-weight-bold">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Update Profile</button>
                            <a href="{{ url('my-profile') }}" class="btn btn-outline-secondary btn-lg ml-3">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    .card {
        border-radius: 10px;
    }

    .form-control {
        border-radius: 8px;
        box-shadow: none;
        padding: 10px;
    }

    .btn {
        border-radius: 50px;
        padding: 12px 30px;
        font-size: 16px;
    }

    .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
    }

    .text-danger {
        font-size: 14px;
    }

    .mb-3 label {
        font-weight: 600;
        color: #333;
    }

    .text-center {
        margin-top: 20px;
    }
</style>
