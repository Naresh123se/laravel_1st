@extends('frontend.master')

@section('content')

<section class="about-section py-5">
    <div class="container">
        <div class="row ">

            <div class=" col-10 col-lg-7 col-xl-6">
                <div class="text1">

                <h2 class="section-title mb-4 text">Welcome to Silver  Point Restaurant</h2>
                <p class="text">
                    At Silver Point, we take pride in delivering an exceptional dining experience to our valued customers. Our passion for great food and excellent service is what sets us apart.
                </p>
                <p class="text">
                    Established with a commitment to culinary excellence, Silver Point is more than just a restaurant; it's a place where flavors come alive, and every meal is a celebration.
                </p>
                </div>

            </div>
            <div class="col-12 col-lg-7 col-xl-6">
             
                <img src="https://img.freepik.com/free-photo/chicken-skewers-with-slices-sweet-peppers-dill_2829-18809.jpg?t=st=1734890006~exp=1734893606~hmac=e8db659ff563a0bd6192eb114a7e7d9088f0be34a20c32975145aa767aeaee91&w=740" alt="Restaurant Image" class="res-img">
            </div>

        </div>
    </div>
</section>

<section class="mission-section bg-light my-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title dd cat1">Our Mission</h2>
                <p class="text-justify">
                    At Silver Point, our mission is to delight our guests with delectable dishes made from the finest ingredients. We strive to create a warm and inviting atmosphere, making every visit a memorable experience.
                </p>
                <p class="text-justify">
                    From our kitchen to your table, we are dedicated to providing culinary excellence and ensuring that your dining experience exceeds expectations.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="chef-section py-3">
    <h2 class="section-title mb-2 text-center bb ">Meet Our Chef</h2>
    <div class="container d-flex pt-4">
        <div class="row pt-3">
            <div class="col-md-12 text-center ">
                
                <img src="https://img.freepik.com/free-photo/frowning-young-male-chef-wearing-uniform-looking-camera-showing-fists-camera-isolated-brown-background_141793-137369.jpg?t=st=1734894518~exp=1734898118~hmac=d504e44c2ca8fd4e97aea57a3be12e06045a57990f3b2e9593233e6b2ed969f0&w=740" alt="Chef Image" class=" " style="width:150%; padding-left:50px; ">

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class=" text-left">Chef Salt Bae</h3>
                <p class="text-left">
                With an unwavering passion for the art of culinary excellence, Chef Salt Bae is the creative visionary behind the extraordinary dining experience at Silver Point. Bringing a unique blend of innovation, artistry, and a wealth of experience accumulated over years of dedication to the culinary craft, he transforms the finest ingredients into masterpieces that delight the senses.
    </div>
</section>



<section class="testimonials-section my-5 pb-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title dd cat1">What Our Customers Say</h2>
            </div>
        </div>
        <div class="row  ">
            <div class="col-md-4 border border-max ">
                <div class="testimonial-card text-center p-4">
                    <p class="mb-3">"Amazing food and great atmosphere. Silver Point is my go-to place for a delightful dining experience."</p>
                    <p class="testimonial-author">- Jane Doe</p>
                </div>
            </div>
            <div class="col-md-4 border border-max ">
                <div class="testimonial-card text-center p-4">
                    <p class="mb-3">"The flavors are unmatched, and the service is impeccable. Silver Point sets the standard for excellence in dining."</p>
                    <p class="testimonial-author">- John Smith</p>
                </div>
            </div>
            <div class="col-md-4 border border-max ">
                <div class="testimonial-card text-center p-4">
                    <p class="mb-3">"A culinary delight! Silver Point never fails to impress with its diverse menu and top-notch quality."</p>
                    <p class="testimonial-author">- Emily Johnson</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
