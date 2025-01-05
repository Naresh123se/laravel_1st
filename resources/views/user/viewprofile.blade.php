@extends('frontend.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('alert-type') == 'success')
            <div class="alert alert-success" id="success-alert">
                {{ session('message') }}
            </div>

            <script>
                setTimeout(function() {
                    var successAlert = document.getElementById('success-alert');
                    if (successAlert) {
                        successAlert.style.display = 'none';
                    }
                }, 2000); // 2000 milliseconds = 2 seconds
            </script>
            @endif

            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h4>My Profile</h4>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Name</strong>
                            <span>{{ Auth::user()->name }}</span>
                        </div>

                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Email</strong>
                            <span>{{ Auth::user()->email }}</span>
                        </div>

                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Contact Number</strong>
                            <span>{{ Auth::user()->phone }}</span>
                        </div>

                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Address</strong>
                            <span>{{ Auth::user()->address }}</span>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ url('edit-profile/'.Auth::user()->id) }}" class="btn btn-warning btn-lg">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
