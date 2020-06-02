@extends('layouts.contact')

@section('title')
Contact Me
@endsection

@section('content')
<main>
    <div class="container-fluid">
        <!-- Section Contact -->
        <section class="section-contact">
            <h1 class="title">My Contact</h1>
            <h2 class="sub-title">You can contact me anytime</h2>
            <hr />

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name"></input>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email"></input>
                    </div>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-send-message" type="submit">Send Message</button>
                </div>

                <div class="col-md-6 col-sm-6 justify-content-center">
                    <h1 class="label">Wanna contact me in personal?</h1>
                    <h1 class="sub-label">You can contact me here</h1>
                    <hr class="label-line">
                    <ul class="list-unstyled">
                        <li>
                            <h3>
                                <img src="{{ url('resources/images/assets/telephone.png')}}" alt="" />+6282245065810
                            </h3>
                        </li>

                        <li>
                            <h3>
                                <img src="{{ url('resources/images/assets/whatsapp.png')}}" alt="" />+6282245065810
                            </h3>
                        </li>

                        <li>
                            <h3>
                                <img src="{{ url('resources/images/assets/at.png')}}" alt="" />developerlukuzu@gmail.com
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection