@extends('layout')

@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Products</h4>

                                    <div class="page-title-right">
                                        {{-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Products</li>
                                        </ol> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    @foreach($product as $product)
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    
                                                    <img src="{{ asset('storage/' . $product->product_thumbnail) }}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">{{ $product->product_name}} </a></h5>
                                                    
                                                    {{-- <p class="text-muted">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum.
                                                    </p> --}}
                                                    <p class="text-muted">
                                                        <div class="btn-group btn-group-example mb-3" role="group">
                                                            <button type="button" class="btn btn-outline-danger w-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id}}">Delete</button>
                                                        </div>
                                                    </p>
                                                    
                                            <div class="modal fade" id="exampleModal{{ $product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete current selected item</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                                    {{-- <h5 class="my-0"><span class="text-muted me-2"><del>$500</del></span> <b>$450</b></h5> --}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Vedharayam.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Akinoz
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
            @endsection