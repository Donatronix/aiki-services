@extends('layouts.pages.contact')
@section('content')
<div class="contact-us">
    <div class="container contact-content">
        <div class="row">
            <div class="col-md-6">
                <p>
                    CONTACT US.
                </p>
                <h3>
                    Let's Talk<br />
                    About You
                </h3>

            </div>
            <div class="col-md-6 contact-form">
                <div class="the_form">
                    <h2>Send us a message</h2>
                    <form action="">
                        <div class="form-group">
                            <label for="Full Name">Full Name <span>*</span></label>
                            <input type="text" placeholder="Omole grace Olaotan">
                        </div>
                        <div class="form-group">
                            <label for="Full Name">Email Address <span>*</span></label>
                            <input type="email" placeholder="olayinka@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="Full Name">Subject <span>*</span></label>
                            <input type="text" placeholder="Request to work with you">
                        </div>
                        <div class="form-group">
                            <label for="Full Name">Your Message <span>*</span></label>
                            <textarea name="message" placeholder="Omole grace Olaotan"></textarea>
                        </div>
                        <button>Send <i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container social-media-contact">
    <div class="row">
        <div class="col-md-4">
            <div class="text">
                <p><i class="fas fa-phone"></i> +234 8166 656 783</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text middle">
                <p><i class="fas fa-envelope"></i> holla@aikiservices.com</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text">
                <p><i class="fas fa-map-marker-alt"></i>Ikeja, agbal, Lagos State</p>
            </div>
        </div>
    </div>
</div>
@endsection
