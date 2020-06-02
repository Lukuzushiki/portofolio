@extends('layouts.home')

@section('title')
Portofolio Pages
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <div class="background">
        <h1 class="header-slogan">
            Do You Need a Great Web or Android Application
            <br />
            with the best UX/UI Experiences
            <br />
            for your Users?
        </h1>
        <a href="portofolio.html" class="btn btn-checkout">Checkout My Work</a>
    </div>
</header>

<main>
    <div class="container-fluid">
        <!-- Section My Profile -->
        <section class="section-my-profile">
            <h2 class="title">My Profile</h2>
            <hr />
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="profile" src="{{ url('resources/images/profile.png')}}" alt="" />
                </div>
                <div class="col-md-7 col-sm-6">
                    <h2 class="name">Febri Wardhana</h2>
                    <p>
                        I'm Febri Wardhana and i'm a web developer and android developer.
                        I can make your dream about beatifull website or android apps come
                        true. I made so many project. You can check my work and download
                        my CV. Hire Me if you want Beatifull Website or Android Apps with
                        the best UX for your user.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section Service -->
        <section class="section-service">
            <h1 class="title">My Service</h1>
            <h2 class="sub-title">What I can do for you</h2>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/design(1).png')}}" class="card-img" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">
                                Build a website for your personal branding or company
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/app-development(1).png')}}" class="card-img"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Android Development</h5>
                            <p class="card-text">
                                Build a mobile application with android as operating system
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/ux-design(1).png')}}" class="card-img" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">UI/UX Design</h5>
                            <p class="card-text">
                                Make an UI/UX Design for you. For user best experience with
                                your website or application
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Process -->
        <section class="section-process">
            <h1 class="title">My Process</h1>
            <h2 class="sub-title">How i manage my workflow</h2>
            <hr />
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/business-and-finance(1).png')}}" class="card-img"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Research</h5>
                            <p class="card-text">
                                Do research for what clients want to build
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/design(1).png')}}" class="card-img" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Design</h5>
                            <p class="card-text">
                                Designing UI/UX for make user comfort with website or apps
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/web-programming(1).png')}}" class="card-img"
                            alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Code</h5>
                            <p class="card-text">
                                Implement the design into the code for make website system and
                                apps
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="{{ url('resources/images/assets/speed(1).png')}}" class="card-img" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Testing</h5>
                            <p class="card-text">
                                Testing the system from bug and many others thing for make the
                                best performance
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonials -->
        <section class="section-testimonials">
            <h1 class="title">Testimonials</h1>
            <h2 class="sub-title">What people say about me</h2>
            <hr />
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('resources/images/testi-1.jpg')}}" class="testi" alt="..." />
                        <div class="carousel-text">
                            <h2 class="name">Signee</h2>
                            <p class="quote">
                                " Nice work, I get the best website for my company here "
                            </p>
                            <hr />
                            <h2 class="year">2020</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('resources/images/testi-2.jpg')}}" class="testi" alt="..." />
                        <div class="carousel-text">
                            <h2 class="name">Signee</h2>
                            <p class="quote">
                                " Nice work, I get the best website for my company here "
                            </p>
                            <hr />
                            <h2 class="year">2020</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('resources/images/testi-3.jpg')}}" class="testi" alt="..." />
                        <div class="carousel-text">
                            <h2 class="name">Signee</h2>
                            <p class="quote">
                                " Nice work, I get the best website for my company here "
                            </p>
                            <hr />
                            <h2 class="year">2020</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div>
</main>
@endsection