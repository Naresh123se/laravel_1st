<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f8f9fa;
			font-family: 'Roboto', sans-serif;
		}
		.login-container {
			max-width: 400px;
			margin: 50px auto;
			padding: 30px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}
		.login-logo {
			display: flex;
			justify-content: center;
			margin-bottom: 20px;
		}
		.login-logo img {
			width: 120px;
		}
		.login-title {
			font-size: 24px;
			font-weight: 700;
			color: #333;
			text-align: center;
			margin-bottom: 10px;
		}
		.form-label {
			font-size: 14px;
			font-weight: 500;
			color: #555;
		}
		.btn-login {
			background-color: #007bff;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.btn-login:hover {
			background-color: #0056b3;
		}
		.text-small {
			font-size: 12px;
			color: #888;
		}
		.text-link {
			color: #007bff;
			text-decoration: none;
		}
		.text-link:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="login-container">
		<div class="login-logo">
			<a href="/"><img src="{{asset('images/logo12.png')}}" alt="Restaurant Logo"></a>
		</div>
		<div class="login-title">Log In To Continue</div>
		<p class="text-center text-muted">Welcome back! Please log in to your account.</p>

		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
				@error('email')
				<div class="text-danger small">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
				@error('password')
				<div class="text-danger small">{{ $message }}</div>
				@enderror
			</div>

			<div class="d-flex justify-content-between align-items-center mb-3">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="remember_me" name="remember">
					<label class="form-check-label" for="remember_me">Remember me</label>
				</div>
				<!-- @if (Route::has('password.request'))
				<a href="{{ route('password.request') }}" class="text-link">Forgot Password?</a>
				@endif -->
			</div>

			<div class="d-grid">
				<button type="submit" class="btn-login">Login</button>
			</div>

			<p class="text-center mt-3 text-small">
				Don't have an account? <a href="/register" class="text-link">Sign Up</a>
			</p>
		</form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
