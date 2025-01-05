@extends('frontend.master')

@section('content')

<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-primary mb-4">Welcome to Silver Point Restaurant</h2>
                <p class="text-muted">
                    At Silver Point, we take pride in delivering an exceptional dining experience to our valued customers. Our passion for great food and excellent service sets us apart.
                </p>
                <p class="text-muted">
                    Established with a commitment to culinary excellence, Silver Point is more than just a restaurant; it's a place where flavors come alive, and every meal is a celebration.
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
        <h2 class="section-title text-secondary mb-4">Our Mission</h2>
        <p class="text-muted">
            At Silver Point, our mission is to delight our guests with delectable dishes made from the finest ingredients. We strive to create a warm and inviting atmosphere, making every visit a memorable experience.
        </p>
        <p class="text-muted">
            From our kitchen to your table, we are dedicated to providing culinary excellence and ensuring that your dining experience exceeds expectations.
        </p>
    </div>
</section>

<section class="chef-section py-5">
    <div class="container text-center">
        <h2 class="section-title text-primary mb-4">Meet Our Chef</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="https://img.freepik.com/free-photo/frowning-young-male-chef-wearing-uniform-looking-camera-showing-fists-camera-isolated-brown-background_141793-137369.jpg" alt="Chef Image" class="img-fluid rounded-circle mb-4">
                <h3 class="text-secondary">Chef Salt Bae</h3>
                <p class="text-muted">
                    With an unwavering passion for the art of culinary excellence, Chef Salt Bae is the creative visionary behind the extraordinary dining experience at Silver Point. He transforms the finest ingredients into masterpieces that delight the senses.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title text-secondary mb-4">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted">"Amazing food and great atmosphere. Silver Point is my go-to place for a delightful dining experience."</p>
                    <p class="testimonial-author text-primary">- Jane Doe</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted">"The flavors are unmatched, and the service is impeccable. Silver Point sets the standard for excellence in dining."</p>
                    <p class="testimonial-author text-primary">- John Smith</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card p-4 bg-white shadow rounded">
                    <p class="mb-3 text-muted">"A culinary delight! Silver Point never fails to impress with its diverse menu and top-notch quality."</p>
                    <p class="testimonial-author text-primary">- Emily Johnson</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
