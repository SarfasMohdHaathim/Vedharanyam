@extends('guest.layout')
@section('content')

<!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Blog - Single Post</h1>
                        <p data-aos="fade-right">Duis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud exercitation.</p>
                        <div class="btn_wrapper">
                            <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"> Single Post</span>
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
<!-- MAIN SECTION -->
<section class="blog-posts single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="blog" class="single-post01">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-aos="fade-up">
                                <a href="#">
                                    <img alt="" src="{{ asset('storage/' . $treatment->thumbnail) }}">
                                </a>
                                <!--post-image-->
                            </div>
                            <div class="post-item-description">
                                <h2 class="single-post-heading font_weight_600">{{ $treatment->name}}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date color01"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                </div>
                                    
                                <div id="treatment-inner">
                                    {!! $treatment->details !!}
                                </div>
                            </div>
                        </div>
                        <!--post-item-->
                    </div>
                    <!--single-post01-->
                </div>
                <!--col-->
            </div>
            <!--row-->
            <div class="col-md-4">
                <div class="row" id="treatment-">
                    <div class="col-xl-12 col-lg-12">
                       <div class="float-left w-100 post-item border mb-4">
                          <div class="post-item-wrap position-relative">
                             <div class="post-image">
                                <a href="{{ route('guest.product') }}">
                                <img alt="" src="{{ asset('vedharanyam\assets\images\pic\abside.jpg') }}">
                                <h4 id="treatment-title">Our Products</h4>
                                </a>
                                <!--post-image-->
                             </div>
                             <!--post-item-wrap-->
                          </div>
                          <!--post-item-->
                       </div>
                       <!--col-->
                    </div>
                    <div class="col-xl-12 col-lg-12">
                       <div class="float-left w-100 post-item border my-4">
                          <div class="post-item-wrap position-relative">
                             <div class="post-image">
                                <a href="{{ route('guest.blogpage') }}">
                                <img alt="" src="{{ asset('vedharanyam\assets\images\pic\adside2.jpg') }}">
                                <h4 id="treatment-title">Blog</h4>
                                </a>
                                <!--post-image-->
                             </div>
                             <!--post-item-wrap-->
                          </div>
                          <!--post-item-->
                       </div>
                       <!--col-->
                    </div>
                    <div class="col-xl-12 col-lg-12">
                       <div class="float-left w-100 post-item border my-4">
                          <div class="post-item-wrap position-relative">
                             <div class="post-image">
                                <a href="{{ route('guest.gallery') }}">
                                <img alt="" src="{{ asset('vedharanyam\assets\images\pic\adside3.jpg') }}">
                                <h4 id="treatment-title">Gallery</h4>
                                </a>
                                <!--post-image-->
                             </div>
                             <!--post-item-wrap-->
                          </div>
                          <!--post-item-->
                       </div>
                       <!--col-->
                    </div>
                    <div class="col-xl-12 col-lg-12">
                       <div class="float-left w-100 post-item border my-4">
                          <div class="post-item-wrap position-relative">
                             <div class="post-image">
                                <a href="{{ route('guest.about') }}">
                                <img alt="" src="{{ asset('vedharanyam\assets\images\pic\adside4.jpg') }}">
                                <h4 id="treatment-title">About</h4>
                                </a>
                                <!--post-image-->
                             </div>
                             <!--post-item-wrap-->
                          </div>
                          <!--post-item-->
                       </div>
                       <!--col-->
                    </div>
                </div>
            </div>

        </div>
    </div>
<!--container-->
</section>

@endsection