<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Portofolio Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link @if(Request::is('home')) active @endif" href="{{ url('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('portofolio')) active @endif"
                    href="{{ url('portofolio')}}">Portofolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('about')) active @endif" href="{{url('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Request::is('contact')) active @endif" href="{{url('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
</nav>