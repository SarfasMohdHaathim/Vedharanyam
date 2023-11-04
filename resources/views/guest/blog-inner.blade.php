@extends('guest.layout')

@section('content')

    <!-- SUB BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Blog </h1>
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
<section class="blog-posts single-post">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div id="blog" class="single-post01">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-aos="fade-up">
                                <a href="#">
                                    <img alt="" src="{{ asset('storage/' . $blog->thumbnail) }}">
                                </a>
                                <!--post-image-->
                            </div>
                            <div class="post-item-description">
                                <h2 class="single-post-heading font_weight_600">{{ $blog->name }}</h2>
                                <div class="post-meta">
                                    <span class="post-meta-date color01"><i class="fa fa-calendar"></i>Updated on :<span id="date-filter">{{$blog->created_date}}</span></span>
                                    <div class="post-meta-share float-right">
                                        <!--post-meta-share-->
                                    </div>
                                    <!--post-meta-->
                                </div>    
                                <div>
                                    {!! $blog->content !!}
                                </div>
                            </div>
                            <div class="post-navigation">
                                @if ($previousBlog)
                                <a href="{{ route('guest.blog', $previousBlog->name) }}" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post: {{ $previousBlog->name }}</span></div>
                                </a>
                                @endif
                                @if ($nextBlog)
                                <a href="{{ route('guest.blog', $nextBlog->name) }}" class="post-next">
                                    <div class="post-next-title"><span>Next Post: {{ $nextBlog->name }}</span></div>
                                </a>
                                @endif
                                <!--post-navigation-->
                            </div>
                        </div>
                        <!--post-item-->
                    </div>
                    <!--single-post01-->
                </div>
                <!--col-->
            </div>
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="theiaStickySidebar">
                    <div class="widget widget-newsletter">
                        <form id="widget-search-form-sidebar" class="form-inline">
                            <div class="input-group">
                                <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                <div class="input-group-append">
                                    <span class="input-group-btn">
                                    <button type="submit" id="widget-widget-search-form-button" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                                    <!--input-group-append-->
                                </div>
                                <!--input-group-->
                            </div>
                            <!--form-inline-->
                        </form>
                        <!--widget-->
                    </div>
                    <div class="widget">
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link">Popular</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel">
                                    <div class="post-thumbnail-list">
                                        @foreach($recentBlogs as $recent)
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="" src="{{ asset('storage/' . $recent->thumbnail) }}">
                                            <div class="post-thumbnail-content">
                                                <a href="{{ route('guest.blog', ['name' => $recent->name]) }}">{{$recent->name}}</a>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        @endforeach

                                        <!--post-thumbnail-list-->
                                    </div>
                                    <!--tab-pane-->
                                </div>
                            </div>
                            <!--tabs-->
                        </div>
                        <!--widget-->
                    </div>
                    <!--theiaStickySidebar-->
                </div>
                <!--sidebar-->
            </div>
            <!--row-->
        </div>
    </div>
<!--container-->
</section>
<script>
var postMetaDateElement = document.querySelector('#date-filter');

if (postMetaDateElement) {
    var dateString = postMetaDateElement.textContent.trim();
    var date = new Date(dateString);
    var months = [
        "JAN", "FEB", "MAR", "APR", "MAY", "JUN",
        "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"
    ];
    var day = date.getDate();
    var month = months[date.getMonth()];
    var year = date.getFullYear();
    var formattedDate = day + ', ' + month + ', ' + year;
    postMetaDateElement.textContent = formattedDate;
}
</script>

@endsection