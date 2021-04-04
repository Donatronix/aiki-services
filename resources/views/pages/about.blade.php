@extends('layouts.pages.about')
@section('content')
<div class="container caption">
    <div class="row">
        <div class="col-md-6 caption-text">
            <div class="text">
                <h1>About US</h1>
                <p>
                    AIKI Services is a multi-sided web platform linking customers to
                    skilled safe reliable and qualified technicians for premium
                    mechanical, electrical and plumbing services.
                </p>
                <p>
                    Why go through the cost and trouble of hiring foreign workers when
                    you can get safe reliable and qualified skilled technicians from
                    AIKI Services for your high end mechanical electrical and plumbing
                    (MEP) products installation, repair and maintenance work?
                </p>
            </div>
        </div>
        <div class="col-md-6 image">
            <img src="{{ asset('pages/images/About.png') }}" alt="" />
        </div>
    </div>
</div>

<div class="textofservice">
    <h3>WHY CHOOSE US?</h3>
</div>
<div class="container whyChooseUs">
    <div class="row">
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/top-notch.png') }}" alt="" />
                <h3>Top-notch Work</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/fast.png') }}" alt="" />
                <h3>Fast and Secured</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="why-content">
                <img src="{{ asset('pages/images/neat.png') }}" alt="" />
                <h3>Neat and Reliable</h3>
                <p>
                    We deliver the best work. You just need to trust us with money.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
