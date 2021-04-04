<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img src="{{ asset('pages/images/aiki-white logo.png') }}" alt="Aiki Logo White">
                </div>
            </div>
            <div class="col-md-4">
                <h3>Company</h3>

                <li><a href="{{ route('home') }}"> Home</a></li>
                <li><a href="{{ route('about') }}"> About</a></li>
                <li><a href="{{ route('service') }}"> Services</a></li>
                <li><a href="{{ route('contact') }}"> Contact</a></li>
                <li><a href="{{ route('request.service') }}"> Request a Service</a></li>
                @guest
                <li>
                    <a href="{{ route('register') }}"> Sign up</a>
                </li>
                <li>
                    <a href="{{ route('login') }}"> login</a>
                </li>
                @else
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </div>
            <div class="col-md-4">
                <h3>Contact</h3>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
        </div>
    </div>
    <div class="container post-footer">
        <div class="row">
            <div class="col-md-6">
                <p>All rights Reserved,2021</p>
            </div>
            <div class="col-md-6 privacy">
                <p>Privacy Policy | Terms of Condition </p>
            </div>
        </div>
    </div>
</footer>
