@extends('layouts.portofolio')

@section('title')
My Portofolio
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <!-- Section Portofolio -->
        <section class="section-portofolio">
            <h2 class="title">All of My Portofolio</h2>
            <h3 class="sub-title">What i've done with all of my clients want</h3>
            <hr>

            <!-- Tab Menu -->
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                        aria-controls="pills-all" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab"
                        aria-controls="pills-web" aria-selected="false">Web Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-android-tab" data-toggle="pill" href="#pills-android" role="tab"
                        aria-controls="pills-android" aria-selected="false">Android Development</a>
                </li>
            </ul>

            <!-- Tab-Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 blogBox">
                            <a href="{{ url('detail')}}">
                                <div class="card">
                                    <img src="{{ url('resources/images/portofolio-1.png')}}" class="card-img"
                                        alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title">Statistics Aplication</h5>
                                        <p class="card-text">
                                            Android Apps
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-2.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">UKRPOSHTA</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-3.gif')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Google Drive</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-4.jpg')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">E-Commerce</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox" style="display: none;">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-5.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Travel Website</h5>
                                    <p class="card-text">
                                        Web Development
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox" style="display: none;">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-6.jpg')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Statistic Website</h5>
                                    <p class="card-text">
                                        Web Development
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox" style="display: none;">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-7.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Music Player</h5>
                                    <p class="card-text">
                                        UI/UX Design
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 blogBox moreBox" style="display: none;">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-8.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Weather Application Aplication</h5>
                                    <p class="card-text">
                                        UI/UX Design
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-5.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Travel Website</h5>
                                    <p class="card-text">
                                        Web Development
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-6.jpg')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Statistic Website</h5>
                                    <p class="card-text">
                                        Web Development
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-android" role="tabpanel" aria-labelledby="pills-android-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-1.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Statistics Aplication</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-2.png')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">UKRPOSHTA</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-3.gif')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Google Drive</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <img src="{{ url('resources/images/portofolio-4.jpg')}}" class="card-img" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">E-Commerce</h5>
                                    <p class="card-text">
                                        Android Apps
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-load-more" id="loadMore"><img src="{{ url('resources/images/btn_plus.png')}}"
                    alt=""> Load
                More</a>
        </section>
    </div>
</main>
@endsection

@push('addon-script')
<script>
    $(document).ready(function () {
            $(".moreBox").slice(0, 3).show();
            if ($(".blogBox:hidden").length != 0) {
                $("#loadMore").show();
            }
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $(".moreBox:hidden").slice(0, 6).slideDown();
                if ($(".moreBox:hidden").length == 0) {
                    $("#loadMore").fadeOut('slow');
                }
            });
        });
</script>
@endpush