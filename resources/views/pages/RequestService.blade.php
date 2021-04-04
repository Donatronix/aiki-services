@extends('layouts.pages.RequestService')
@section('content')
<div class="container get_service">
    <div class="row">
        <div class="col-md-6">
            <h3>
                Get Started<br />
                To Get Our Services
            </h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui .</p>
        </div>
        <div class="col-md-12">
            <form action="{{ route('request.store') }}" method="POST">
                @csrf
                <div class="form-row row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone_number">Phone Number</label>
                        <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="state">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                </div>
                <div class="form-row row">
                    <div class="form-group col-md-6">
                        <label for="service">Service to Render you</label>
                        <select id="service" name="service" class="form-control">
                            <option value="Plumbing" selected>Plumbing</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Both">Both</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">
                        Your Message
                    </label>
                    <textarea name="message" class="form-control"></textarea>

                </div>
                <button type="submit">Get Started</button>
            </form>
        </div>
    </div>
</div>
@endsection
