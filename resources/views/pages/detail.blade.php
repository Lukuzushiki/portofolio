@extends('layouts.detail')

@section('title')
Detail Project
@endsection

@section('content')
<main>
    <div class="container-fluid">

        <!-- Section Detail -->
        <section class="section-detail">
            <h1 class="title">Statistics Aplication</h1>

            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{ url('resources/images/portofolio-1.png')}}" />
                            <div class="xzoom-thumbs">
                                <a href="{{ url('resources/images/portofolio-1.png')}}"><img class="xzoom-gallery"
                                        src="{{ url('resources/images/portofolio-1.png')}}"
                                        xpreview="{{ url('resources/images/portofolio-1.png')}}" /></a>
                                <a href="{{ url('resources/images/portofolio-2.png')}}"><img class="xzoom-gallery"
                                        src="{{ url('resources/images/portofolio-2.png')}}"
                                        xpreview="{{ url('resources/images/portofolio-2.png')}}" /></a>
                                <a href="{{ url('resources/images/portofolio-3.gif')}}"><img class="xzoom-gallery"
                                        src="{{ url('resources/images/portofolio-3.gif')}}"
                                        xpreview="{{ url('resources/images/portofolio-3.gif')}}" /></a>
                                <a href="{{ url('resources/images/portofolio-4.jpg')}}"><img class="xzoom-gallery"
                                        src="{{ url('resources/images/portofolio-4.jpg')}}"
                                        xpreview="{{ url('resources/images/portofolio-4.jpg')}}" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="detail-website">
                        <div class="card">
                            <h2 class="title">
                                Detail Website
                            </h2>
                            <p class="description">
                                Website ini digunakan sebagai situs e-commerce unutk pemesanan tiket secara
                                online. Yang memberikan fitur tambahan seperti pembuatan VISA, Feaetured
                                Destination.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <h2 class="title">
                            Project Type
                        </h2>
                        <p>Android Development</p>
                        <h2 class="title">Tools Used</h2>
                        <img src="{{ url('resources/images/assets/Skills Logo/android_studio.png')}}" alt="">
                        <h2 class="title">URL</h2>
                        <p>Unknown</p>
                    </div>

                    <div class="card clients">
                        <h2 class="title">
                            Clients
                        </h2>
                        <div class="testimonials">
                            <img class="rounded-circle"
                                src="{{ url('resources/images/parker-whitson-ImkwgC13nqU-unsplash.jpg')}}" alt="">
                            <div class="coment">
                                <h2>UKRPOSHTA</h2>
                                <p>"Nice work from this developer. I like the
                                    design"</p>
                            </div>
                        </div>
                        <div class="rating">
                            <h2 class="title">
                                Rating From Clients
                            </h2>
                            <img src="{{ url('resources/images/assets/Emoticon Rating/dead(2).png')}}" alt="">
                            <img src="{{ url('resources/images/assets/Emoticon Rating/sad(2).png')}}" alt="">
                            <img src="{{ url('resources/images/assets/Emoticon Rating/sceptic(2).png')}}" alt="">
                            <img src="{{ url('resources/images/assets/Emoticon Rating/happy(2).png')}}" alt="">
                            <img src="{{ url('resources/images/assets/Emoticon Rating/happy(4).png')}}" alt="">
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>
@endsection

@push('addon-script')
<script>
    $(document).ready(function () {
                    $('.xzoom, .xzoom-gallery').xzoom({
                        zoomWidth: 500,
                        title: false,
                        tint: '#333',
                        Xoffset: 15
                    });
                });
</script>
@endpush