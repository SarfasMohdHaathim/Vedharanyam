@extends('guest.layout')

@section('content')


        <!-- SOCIAL ICONS -->
        <div class="left_icons float-left d-table" data-aos="fade-down">
            <div class="icon_content d-table-cell align-middle">
                <ul class="list-unstyled p-0 m-0">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- BANNER SECTION -->
        <section class="banner-section">
            <div class="container-fluid">
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-md-left text-center">
                        <div class="banner-section-content">
                            <h5>Start a Happy Life</h5>
                            <h1 data-aos="fade-up">Start Healing Your Mind, <span class="ityped"></span></h1>
                            <p data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud exercitation.</p>
                            <div class="btn_wrapper" data-aos="fade-up">
                                <a class="text-decoration-none getstarted_btn" href="index.html">Get Started</a>
                            </div>
                            <a class="top-btn" href="index.html#footer_section">
                                <i class="fa-solid fa-arrow-down-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="banner-section-image">
                            <figure class="mb-0">
                                <img src="{{ asset('vedharanyam/assets/images/banner_right_image.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('vedharanyam/assets/images/banner_left_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('vedharanyam/assets/images/banner_left_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('vedharanyam/assets/images/banner_right_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('vedharanyam/assets/images/banner_right_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
        </section>
    </div>
    <!-- OUR SERVICES SECTION -->
    <section class="services_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="services_content">
                        <h5>Our Services</h5>
                        <h2>Practice Whereever You Want Whenever You Need </h2>
                        <p>Taciti fames lacinia orci finibus metus elit tempus faucibus urna nunc dui rhoncus aibendum vea porttitor volutrat felis massa feugiat</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="services_box_content">
                        <div class="services_box_upper_portion">
                            <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/services_img_1.png') }}" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="services_box_lower_portion">
                            <h3>Shirodhara </h3>
                            <p>Finibus metus elit tempus faucibus urna nunc aui.</p>
                            <div class="btn_wrapper">
                                <a href="services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="services_box_content">
                        <div class="services_box_upper_portion">
                            <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/services_img_2.png') }}" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="services_box_lower_portion">
                            <h3>Meditation</h3>
                            <p>Ainibus metus elit tempus faucibus urna nunc cui.</p>
                            <div class="btn_wrapper">
                                <a href="services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right" aria-hidden="true">More</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="services_box_content">
                        <div class="services_box_upper_portion">
                            <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/services_img_3.png') }}" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="services_box_lower_portion">
                            <h3>Nutrition Consultation</h3>
                            <p>Binibus metus elit tempus faucibus urna nunc eui.</p>
                            <div class="btn_wrapper">
                                <a href="services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="services_box_content">
                        <div class="services_box_upper_portion">
                            <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/services_img_4.png') }}" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="services_box_lower_portion">
                            <h3>Hatha Yoga</h3>
                            <p>Dinibus metus elit tempus faucibus urna nunc rui.</p>
                            <div class="btn_wrapper">
                                <a href="services.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <figure class="services_left_shape left_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/services_left_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- ABOUT US SECTION -->
    <section class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/aboutus_image.png') }}" alt="" class="img-fluid"></figure>
                    </div>
                    <figure class="aboutus_top_shape left_shape mb-0">
                        <img src="{{ asset('vedharanyam/assets/images/aboutus_top_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                    <figure class="aboutus_bottom_shape left_shape mb-0">
                        <img src="{{ asset('vedharanyam/assets/images/aboutus_bottom_shape.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="aboutus_content">
                        <h5>About us</h5>
                        <h2>Take Your Yoga to the Next Level</h2>
                        <p>Quis autem vel eum iure reprehenderit qui in eao voluptate velit esse quam nihil molestiae consequatur vel illum.</p>
                        <div class="aboutus_line_wrapper">
                            <h6>Modi tempora incidunt ut labore dolore magnam aliquam auerat volutaem.</h6>
                            <figure class="mb-0 purple_line"><img src="{{ asset('vedharanyam/assets/images/aboutus_line.png') }}" alt="" class="img-fluid"></figure>
                        </div>
                        <div class="btn_wrapper">
                            <a href="about.html" class="text-decoration-none get_started_btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PRICING PLANS SECTION -->
    <section class="pricing_plans_section pricing_plans_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pricing_plans_content">
                        <h5>Our Own Produccts</h5>
                        <h2>Produccts</h2>
                        <p>Molestiae non recusandae itaque earum rerum hic teneaur a sapiente delectus, rae aut reiciendis officia deserunt mollitia animi omnis dolor</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing_plans_box_content">
                        <div class="pricing_plans_box_upper_portion">
                            <figure class="pricing_plans_image mb-0">
                                <img src="{{ asset('vedharanyam/assets/images/med1.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="pricing_plans_box_lower_portion">
                            <h3>Classical products </h3>
                         <!--   <ul class="list-unstyled">
                            </ul>
                            <div class="pricing_plans_span_wrapper">
                                <span class="price">$30</span>
                                <span class="per_month">/per month</span>
                            </div>-->
                            <div class="btn_wrapper">
                                <a class="enroll_now_btn text-decoration-none" href="pricing.html">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing_plans_box_content">
                        <div class="pricing_plans_box_upper_portion">
                            <figure class="pricing_plans_image mb-0">
                                <img src="{{ asset('vedharanyam/assets/images/med1.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="pricing_plans_box_lower_portion">
                            <h3>Proprietary Products </h3>
                            <!--<ul class="list-unstyled">
                            </ul>
                            <div class="pricing_plans_span_wrapper">
                                <span class="price">$30</span>
                                <span class="per_month">/per month</span>
                            </div>-->
                            <div class="btn_wrapper">
                                <a class="enroll_now_btn text-decoration-none" href="pricing.html">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing_plans_box_content">
                        <div class="pricing_plans_box_upper_portion">
                            <figure class="pricing_plans_image mb-0">
                                <img src="{{ asset('vedharanyam/assets/images/med1.png') }}" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="pricing_plans_box_lower_portion">
                            <h3>General Healthcare Products</h3>
                          <!--  <ul class="list-unstyled">
                            </ul>
                            <div class="pricing_plans_span_wrapper">
                                <span class="price">$30</span>
                                <span class="per_month">/per month</span>
                            </div>-->
                            <div class="btn_wrapper">
                                <a class="enroll_now_btn text-decoration-none" href="pricing.html">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- OUR SPECIALTIES SECTION -->
    <section class="our_specialties_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="our_specialties_heading_content">
                        <h5>Our Specialties</h5>
                        <h2>Why Choose Us</h2>
                        <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores nostrum exercitationem ullam corporis suscipit laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="specialties_content_wrapper">
                        <div class="specialties_content s1">
                            <p class="specialties_name">Vinyasa Yoga</p>
                            <p class="specialties_paragraph">Dolor reaellendus temorius maiores alia</p>
                        </div>
                        <div class="specialties_content s2">
                            <p class="specialties_name">Slow Yoga</p>
                            <p class="specialties_paragraph">Rabore et dolore maga eiusmo rute aliua</p>
                        </div>
                        <div class="specialties_content s3">
                            <p class="specialties_name">Intuitive Yoga</p>
                            <p class="specialties_paragraph">Earum rerum hic tene sapiente delectus</p>
                        </div>
                        <div class="specialties_content s4">
                            <p class="specialties_name">Aroma Yoga</p>
                            <p class="specialties_paragraph">Neque orro quisquam est raui dolorem</p>
                        </div>
                        <figure class="specialties_left_line mb-0">
                            <img src="{{ asset('vedharanyam/assets/images/specialties_left_line.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                    <figure class="specialties_image mb-0">
                        <img src="{{ asset('vedharanyam/assets/images/specialties_image.png') }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="specialties_content_wrapper">
                        <div class="specialties_content specialties_content2 s5">
                            <p class="specialties_name">Kundalini Yoga</p>
                            <p class="specialties_paragraph">Dolor reaellendus temorius maiores alia</p>
                        </div>
                        <div class="specialties_content specialties_content2 s6">
                            <p class="specialties_name">Bikram Yoga</p>
                            <p class="specialties_paragraph">Rabore et dolore mae eiusmo rute aliua</p>
                        </div>
                        <div class="specialties_content specialties_content2 s7">
                            <p class="specialties_name">Mindfulness Training</p>
                            <p class="specialties_paragraph">Earum rerum hic tene sapiente delectus</p>
                        </div>
                        <div class="specialties_content specialties_content2 s8">
                            <p class="specialties_name">Workout Routines</p>
                            <p class="specialties_paragraph">Neque orro quisquam est raui dolorem</p>
                        </div>
                        <figure class="specialties_right_line mb-0">
                            <img src="{{ asset('vedharanyam/assets/images/specialties_right_line.png') }}" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
            <figure class="our_specialties_right_shape right_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/our_specialties_right_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- GET IN TOUCH SECTION -->
    <section class="get_in_touch_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="get_in_touch_content">
                        <h5>Get in touch</h5>
                        <h2>Get a Free Consultation Now</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="lname" id="lname" class="form-control form_style" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" name="phonenum" id="phonenum" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group mb-0">
                                        <input type="email" name="emailaddrs" id="emailaddrs" class="form-control form_style" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea rows="3" name="comment" id="msg" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_wrapper">
                                <button type="submit" name="get_started" id="started">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 d-md-block d-none"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="get_in_touch_video position-relative">
                        <a class="popup-vimeo" href="">
                            <figure class="video_img mb-0">
                                <img class="thumb img-fluid" style="cursor: pointer" src="{{ asset('vedharanyam/assets/images/get_in_touch_video_icon.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <figure class="get_in_touch_shape left_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/get_in_touch_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- PRICING PLANS SECTION -->
    
    <!-- TESTIMONIAL SECTION -->
    <div class="testimonial_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial_content">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <p class="testimonial_paragraph">“Quisuam est, qui dolorem ipsum quia dolor sit amet, consec velit sed ruia non nuam
                                        eius modi tempora incidunt ut magnam aliruam auzerat voluptatem autenim rea minima
                                        exercita ionem ullam corporis suscitnis officiis debitis aut rerum necessitatibus saepe
                                        evenietut aer voluptates”</p>
                                    <figure><img src="{{ asset('vedharanyam/assets/images/testimonial_image.png') }}" alt="" class="img-fluid"></figure>
                                    <p class="testimonial_person_name">Himala Joerge</p>
                                    <span>Happy client</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial_content">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <p class="testimonial_paragraph">“Quisuam est, qui dolorem ipsum quia dolor sit amet, consec velit sed ruia non nuam
                                        eius modi tempora incidunt ut magnam aliruam auzerat voluptatem autenim rea minima
                                        exercita ionem ullam corporis suscitnis officiis debitis aut rerum necessitatibus saepe
                                        evenietut aer voluptates”</p>
                                    <figure><img src="{{ asset('vedharanyam/assets/images/testimonial_image.png') }}" alt="" class="img-fluid"></figure>
                                    <p class="testimonial_person_name">Himala Joerge</p>
                                    <span>Happy client</span>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa-solid fa-arrow-left-long"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <figure class="testimonial_left_shape left_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/testimonial_left_shape.png') }}" alt="" class="img-fluid">
            </figure>
            <figure class="testimonial_right_shape right_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/testimonial_right_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </div>
    <!-- BLOG POSTS SECTION -->
    <section class="blog_posts_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_posts_content">
                        <h5>Blog Posts</h5>
                        <h2>Our News Feed</h2>
                        <p>Autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                @foreach($blog as $blog)
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog_posts_image position-relative">
                        <figure class="mb-0"><img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" class="img-fluid"></figure>
                        <div class="blog_posts_image_content">
                            <h4>{{$blog->name}}</h4>
                            <div class="icon_wrapper">
                                <a href="{{ route('guest.blog', ['name' => $blog->name]) }}" class="text-decoration-none"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn_wrapper">
                <a href="single-post.html" class="text-decoration-none view_blog">View All Blogs</a>
            </div>
            <figure class="blog_posts_left_shape left_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/blog_posts_left_shape.png') }}" alt="" class="img-fluid">
            </figure>
            <figure class="blog_posts_right_shape right_shape mb-0">
                <img src="{{ asset('vedharanyam/assets/images/blog_posts_right_shape.png') }}" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
	
@endsection