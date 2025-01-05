@extends('admin.layouts.app')

@section('content')

<section class="content-header">					
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col-sm-6">
				<h1 class="text-primary font-weight-bold">Silver Point Restaurant Dashboard</h1>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card shadow-sm border-left-primary">
					<div class="card-body">
						<h3 class="text-primary">{{ $totalOrders }}</h3>
						<p class="text-muted">Total Orders</p>
						<a href="{{ route('admin.orders') }}" class="btn btn-outline-primary btn-sm">View Details</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card shadow-sm border-left-success">
					<div class="card-body">
						<h3 class="text-success">{{ $totalUsers }}</h3>
						<p class="text-muted">Total Customers</p>
						<a href="{{ route('admin.users') }}" class="btn btn-outline-success btn-sm">View Details</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="card shadow-sm border-left-warning">
					<div class="card-body">
						<h3 class="text-warning">Rs. {{ $totalAmountEarned }}</h3>
						<p class="text-muted">Total Sales</p>
						<a href="{{ route('admin.orders') }}" class="btn btn-outline-warning btn-sm">View Details</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="card shadow-sm">
					<div class="card-header">
						<h5 class="card-title font-weight-bold text-secondary">Daily Orders & Earnings</h5>
					</div>
					<div class="card-body">
						<canvas id="dailyDataChart" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
        var dailyData = {!! json_encode($dailyData) !!};

        var ctx = document.getElementById('dailyDataChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: dailyData.labels,
                datasets: [
                    {
                        label: 'Daily Orders',
                        data: dailyData.ordersData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Earned Amount',
                        data: dailyData.earnedData,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</section>

@endsection
