@extends('frontend.master')

@section('content')

<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-primary mb-4" style="font-family: 'Monospace', Monospace; ">Welcome to Food Circle</h2>
                <p class="text-muted" style="font-family: 'Roboto', sans-serif;">
                    At Food Circle, we are passionate about offering unforgettable dining experiences that blend exceptional flavors with impeccable service. Our commitment to excellence is the cornerstone of who we are.
                </p>
                <p class="text-muted" style="font-family: 'Roboto', sans-serif;">
                    Born from the pursuit of culinary mastery, Food Circle is more than just a restaurant; it's a place where every bite transports you to a world of rich flavors, and every meal is a celebration of good food and great company.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://img.freepik.com/free-photo/chicken-skewers-with-slices-sweet-peppers-dill_2829-18809.jpg" alt="Restaurant Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<section class="mission-section bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title text-secondary mb-4" style="font-family: 'Monospace', Monospace;">Our Mission</h2>
        <p class="text-muted" style="font-family: 'Roboto', sans-serif;">
            At Food Circle, we aim to delight our guests with dishes crafted from only the finest ingredients. We are committed to providing a warm and inviting atmosphere where every visit feels like a special occasion.
        </p>
        <p class="text-muted" style="font-family: 'Roboto', sans-serif;">
            From our kitchen to your table, we are passionate about delivering culinary perfection and ensuring your dining experience exceeds all expectations.
        </p>
    </div>
</section>

<section class="chef-section py-5">
    <div class="container text-center">
        <h2 class="section-title text-primary mb-4" style="font-family: 'Monospace', Monospace;">Meet Our Chef</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="https://img.freepik.com/free-photo/frowning-young-male-chef-wearing-uniform-looking-camera-showing-fists-camera-isolated-brown-background_141793-137369.jpg" alt="Chef Image" class="img-fluid rounded-circle mb-4">
                <h3 class="text-secondary" style="font-family: 'Poppins', sans-serif;">Chef Salt Bae</h3>
                <p class="text-muted" style="font-family: 'Roboto', sans-serif;">
                    With a relentless passion for culinary excellence, Chef Salt Bae brings his creative vision to life at Food Circle. He transforms the finest ingredients into stunning dishes that tantalize your taste buds and elevate your dining experience.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title text-secondary mb-4" style="font-family: 'Monospace', Monospace;">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted" style="font-family: 'Roboto', sans-serif;">"Amazing food and a fantastic atmosphere. Food Circle is my go-to place for a delightful dining experience."</p>
                    <p class="testimonial-author text-primary" style="font-family: 'Poppins', sans-serif;">- Ram Doe</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted" style="font-family: 'Roboto', sans-serif;">"The flavors are unmatched, and the service is top-notch. Food Circle truly sets the standard for dining excellence."</p>
                    <p class="testimonial-author text-primary" style="font-family: 'Poppins', sans-serif;">- Vib Smith</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted" style="font-family: 'Roboto', sans-serif;">"A true culinary gem! Food Circle always impresses with its creative menu and exceptional quality."</p>
                    <p class="testimonial-author text-primary" style="font-family: 'Poppins', sans-serif;">- Emily Johnson</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
