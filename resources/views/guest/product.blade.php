@extends('guest.layout')
@section('content')

        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Product</h1>
                            <!--<p data-aos="fade-right">Euis aute irure dolor in reprehenderit in volurate velit cillum nulla pariatur nostrud exercitation.</p>-->
                            <div class="btn_wrapper">
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"> Product</span>
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

    <section class="pricing_plans_section pricing_plans_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pricing_plans_content">
                        <h5>Our Own Produccts</h5>
                        <h2>Products</h2>
                        <p>Molestiae non recusandae itaque earum rerum hic teneaur a sapiente delectus, rae aut reiciendis officia deserunt mollitia animi omnis dolor</p>
                    </div>
                </div>
            </div>


            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('product1')">Choornnas </button>
                <button class="btn" onclick="filterSelection('product2')"> Gulikas</button>
                <button class="btn" onclick="filterSelection('product3')"> Kashaayas</button>
                <button class="btn" onclick="filterSelection('product4')"> Lehyas </button>
                <button class="btn" onclick="filterSelection('product5')"> Vatakas </button>
                <button class="btn" onclick="filterSelection('product6')"> Thailas  </button>
              <!--  <button class="btn" onclick="filterSelection('product7')"> Sevyas </button>-->
            </div>

            <div class="container product-filter">
                <div class="row" data-aos="fade-up">


                    @foreach($product as $product)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 filterDiv product1">
                        <div class="pricing_plans_box_content ">
                            <div class="pricing_plans_box_upper_portion">
                                <figure class="pricing_plans_image mb-0">
                                    <img src="{{ asset('storage/' . $product->product_thumbnail) }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="pricing_plans_box_lower_portion">
                                <h3>Standard</h3>
                                <ul class="list-unstyled">
                                </ul>
                                <div class="pricing_plans_span_wrapper">
                                    <span class="price">$30</span>
                                    <span class="per_month">/per month</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


    @endsection