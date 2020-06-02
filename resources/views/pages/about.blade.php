@extends('layouts.about')

@section('title')
About Me
@endsection

@section('content')
<main>
    <div class="container-fluid">
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
                    <a href="#" class="btn-my-work">My Work Was Here!</a>
                    <a href="#" class="btn-my-cv">My CV Here!</a>
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

        <!-- Section Skills -->
        <section class="section-skills">
            <h1 class="title">My Skills and My Tools</h1>
            <h2 class="sub-title">What I've learn and I can do</h2>
            <hr />
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/laravel_logo.png')}}" alt="">Laravel</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/android_studio.png')}}" alt="">Android
                        Studio</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/adobe_xd.png')}}" alt="">Adobe XD</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/code_igniter_logo.png')}}" alt="">Code
                        Igniter</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/java_logo.png')}}" alt="">Java</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/mysql_logo.png')}}" alt="">My SQL</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/css_3_logo.png')}}" alt="">CSS 3</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/firebase_logo.png')}}" alt="">Firebase
                    </h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/php_logo.png')}}" alt="">PHP</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 95%">90%</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3><img src="{{ url('resources/images/assets/Skills Logo/bootstrap_logo.png')}}" alt="">Bootstrap
                    </h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95%</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection