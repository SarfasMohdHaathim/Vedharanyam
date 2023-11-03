@extends('guest.layout')
@section('content')
    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Contact Us</h1>
                        <div class="btn_wrapper">
                            <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"> Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="banner_left_top_shape left_shape mb-0">
                <img src="assets/images/banner_left_top_shape.png" alt="" class="img-fluid">
            </figure>
            <figure class="banner_left_bottom_shape left_shape mb-0">
                <img src="assets/images/banner_left_bottom_shape.png" alt="" class="img-fluid">
            </figure>
            <figure class="banner_right_top_shape right_shape mb-0">
                <img src="assets/images/banner_right_top_shape.png" alt="" class="img-fluid">
            </figure>
            <figure class="banner_right_bottom_shape right_shape mb-0">
                <img src="assets/images/banner_right_bottom_shape.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
</div>
<!-- MESSAGE SECTION -->
<section class="message_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="message_content">
                    <h5>Get in Touch.</h5>
                    <h2>Send us a Message</h2>
                    <p>Guia voluptas sit aspernatur aut odit aut fugit, sed quia exercitationem ullam corporis laboriosam</p>
                    @if(session('success'))
                        <p class="text-success">
                            {{ session('success') }}
                        </p>
                    @endif

                    <form id="contactpage" method="POST" action="{{ route('store.contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="firstname" id="fname" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="text" name="lastname" id="lname" class="form-control form_style" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="tel" name="phone" id="phonenum" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group mb-0">
                                    <input type="email" name="emailaddress" id="emailaddrs" class="form-control form_style" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <textarea rows="3" name="msg" id="comment" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn_wrapper">
                            <button type="submit" name="get_started" id="started">Get Started</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box box_padding">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('vedharanyam/assets/images/contact_location.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Location</h3>
                                <p class="mb-0">121 King Street, Melbourne Victoria 3000 Australia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('vedharanyam/assets/images/contact_phone.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Phone</h3>
                                <p><a href="tel:(+61383766284)" class="text-decoration-none">(+61 3 8376 6284)</a></p>
                                <p class="mb-0"><a href="tel:(+80023456789)" class="text-decoration-none">(+800 2345 6789)</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box mb-0">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <img src="{{ asset('vedharanyam/assets/images/contact_mail.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Email</h3>
                                <p><a href="mailto:info@yogastic.com" class="text-decoration-none">info@yogastic.com</a></p>
                                <p class="mb-0"><a href="mailto:yogastic@gmail.com" class="text-decoration-none">yogastic@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT MAP SECTION -->

<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.723884486123!2d144.95488781489115!3d-37.819935979751264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d52754eaecb%3A0x22f367daf52cbd47!2s21%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1666677747590!5m2!1sen!2s" width="1920" height="728" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection