<div class="modalContent ">
    <div class="inn animated slideInRight">
        <div class="cancel"><i class="fas fa-times"></i></div>
        <ul>
            <li><a href="{{ route('home') }}"> Home</a></li>
            <li><a href="{{ route('about') }}"> About</a></li>
            <li><a href="{{ route('service') }}"> Services</a></li>
            <li><a href="{{ route('contact') }}"> Contact</a></li>
            <li><a href="{{ asset('request.service') }}"> Request a Service</a></li>
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
        </ul>
    </div>
</div>
<header class="container">
    <div class="row">
        <div class="logo col-md-3 col-8">
            <img src="{{ asset('pages/images/aiki-logo.png') }}" alt="">
        </div>
        <div class="col-md-9 col-4">
            <ul>
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
            </ul>
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>
