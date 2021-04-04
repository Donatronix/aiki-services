@extends('layouts.pages.service')
@section('content')

<div class="container-fluid service-page">
    <div class="container caption">
        <div class="row">
            <div class="col-md-6 caption-text">
                <div class="text">
                    <h1>Our Services</h1>
                    <p>
                        Why go through the cost and trouble of hiring foreign workers
                        when you can get safe reliable and qualified skilled technicians
                        from AIKI Services for your high end mechanical electrical and
                        plumbing (MEP) products installation, repair and maintenance
                        work?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="textofservice">
    <h3>KNOW MORE ABOUT OUR SERVICES</h3>
</div>

<div class="container our-services">
    <div class="row">
        <div class="col-md-6">
            <div class="image-service one">
                <img src="{{ asset('pages/images/plumber.png') }}" alt="" />
            </div>
        </div>
        <div class="col-md-6">
            <h2>Plumbing</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
            </p>
            <a href=""><button>Get Started</button></a>
        </div>
    </div>
    <div class="row row_two">
        <div class="col-md-6">
            <h2>Electrical Engineering</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
            </p>
            <a href=""><button>Get Started</button></a>
        </div>
        <div class="col-md-6">
            <div class="image-service">
                <img src="{{ asset('pages/images/electric.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="getting-started">
    <div class="container start">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    Get Started<br />
                    To Get Our Services
                </h3>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui .
                </p>
            </div>
            <div class="col-md-6 ">
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
                            <label for="Full Name">Service <span>*</span></label>
                            <select name="" id="">
                                <option value="Plumbing">Plumbing</option>
                                <option value="Electrical">Electrical Engineering</option>
                                <option value="Both">Both Sevices</option>
                            </select>
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
@endsection
