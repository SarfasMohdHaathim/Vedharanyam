@extends('guest.layout')
@section('content')

        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Gallery</h1>
                            <!--<p data-aos="fade-right">Euis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud exercitation.</p>-->
                            <div class="btn_wrapper">
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"> Gallery</span>
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

    <section class="pricing_plans_section pricing_plans_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pricing_plans_content">
                        <h5>Our Gallery</h5>
                        <h2>Gallery</h2>

                    </div>
                </div>
            </div>

            <div class="grid row">
                <div class="col-md-4 ">
                    <div class="gallery-image">
                 <img src="https://source.unsplash.com/400x400?mountain">
                </div></div>
                @foreach($galleries as $gallery)
                <div class="col-md-4"><div class="gallery-image"> <img src="{{ asset('storage/' . $gallery->thumbnail) }}"></div></div>
                
                @endforeach
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?valley"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?beach"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?ocean"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?water"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?trees"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?lake"></div></div>
                <div class="col-md-4"><div class="gallery-image"><img src="https://source.unsplash.com/400x400?cliff"></div></div>
            </div>
            <div id="lightbox">
                <img id="lightbox-img">
            </div>
        </div>
    </section>
    
    
    <script>
        const gridImages = document.querySelectorAll(".grid > div .gallery-image > img");
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");

        // to open lightbox
        gridImages.forEach((img) => {
            img.addEventListener("click", () => {
                lightbox.classList.add("active");
                // set the image clicked as the image of the lightbox
                lightboxImg.src = img.src;
            });
        });

        // To close lightbox
        lightbox.addEventListener("click", (e) => {
            // if the clicked element is not the dark overlay don't close it
            if (e.target !== e.currentTarget) return;
            // if it was the dark overlay it will close it
            lightbox.classList.remove("active");
        });
    </script>


@endsection