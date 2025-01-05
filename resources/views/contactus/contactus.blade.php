@extends('frontend.master')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Contact form on the left side -->
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="contact-form bg-light p-4 rounded shadow">
                    <h1 class="title mb-4">Contact Us</h1>
                    <p class="text-muted mb-4">We're here to help and answer any question you might have. We look forward to hearing from you!</p>
                    @if (Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="post" id="contactForm">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your E-mail Address"
                                required value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number"
                                required value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Get a Call Back</button>
                    </form>
                </div>
            </div>

            <!-- Map on the right side -->
            <div class="col-lg-6 order-lg-2 order-1 mb-4">
                <div class="map rounded shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.814291421619!2d85.31694337518081!3d27.692134076191305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b19295555f%3A0xabfe5f4b310f97de!2sThe%20British%20College%2C%20Kathmandu!5e0!3m2!1sen!2snp!4v1703657607458!5m2!1sen!2snp"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
