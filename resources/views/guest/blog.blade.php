@extends('guest.layout')
@section('content')

    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Blog</h1>
                        <div class="btn_wrapper">
                            <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"> Blog</span>
                        </div>
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
<!-- MAIN SECTION -->
<!--End Slider Section-->
<section class=" blog-posts">
        <div class="container">
           <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <div id="blog" class="col-xl-12">
                 <div class="row">
                    @foreach($blog as $blog)
                    <div class="col-md-6">
                       <div class="float-left w-100 post-item border mb-4">
                          <div class="post-item-wrap position-relative">
                             <div class="post-image">
                                <a href="#">
                                <img alt="" src="{{ asset('storage/' . $blog->thumbnail) }}"> </a>
                                <!--post-image-->
                             </div>
                             <div class="post-item-description">
                                <span class="post-meta-date">
                                <i class="fa fa-calendar-o"></i>Updated on :{{$blog->created_date}}</span>
                                <h2><a href="#">{{$blog->name}}</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                <a href="{{ route('guest.blog', ['name' => $blog->name]) }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                <!--post-item-description-->
                             </div>
                             <!--post-item-wrap-->
                          </div>
                          <!--post-item-->
                       </div>
                       <!--col-->
                    </div>
                    @endforeach
                 </div>
                 <!--blog-->
              </div>
              
              <!--row-->
           </div>
           <!--container-->
        </div>
</section>


@endsection