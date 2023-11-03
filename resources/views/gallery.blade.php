@extends('layout')
@section('content')
<style>
    .h-5 {
    height: 20px;
    }
</style>
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
                                    <h4 class="mb-sm-0 font-size-18">Gallery Grid</h4>

                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                            <li class="breadcrumb-item active">Blog Grid</li>
                                        </ol> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <!-- Tab panes -->
                                    <div class="tab-content p-4">
                                        <div class="tab-pane active" id="all-post" role="tabpanel">
                                            <div>
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-12">
                                                        <div>
                                                            <div class="row align-items-center">
                                                                <div class="col-4">
                                                                    <div>
                                                                        <h5 class="mb-0">Gallery List</h5>
                                                                    </div>
                                                                </div>
                                    
                                                                <div class="col-8">
                                                                    <div>
                                                                        <!-- <ul class="nav nav-pills justify-content-end">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">View :</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="blog-list.html">
                                                                                    <i class="mdi mdi-format-list-bulleted"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" href="blog-grid.html">
                                                                                    <i class="mdi mdi-view-grid-outline"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->

                                                            <hr class="mb-4">

                                                            <div class="row">
                                                                @foreach($galleries as $gallery)
                                                                <div class="col-12 col-md-4 col-sm-4">
                                                                    <div class="card p-1 border shadow-none">
                                                                        
                                                                        <div class="position-relative">
                                                                            <img src="{{ asset('storage/' . $gallery->thumbnail) }}" class="card-img-top" alt="{{ $gallery->title }}"   >
                                                                        </div>
        
                                                                        <div class="p-3">
                                                                            <p>{{ $gallery->title }}</p>
                                                                            <div>
                                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $gallery->id }}">
                                                                                <i class="bx bx-trash font-size-16 align-middle me-2"></i> Danger
                                                                            </button>  
                                                                            <div class="modal fade" id="exampleModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Delete current selected item</h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                            <form method="POST" action="{{ route('gallery.destroy', $gallery->id) }}">
                                                                                                @csrf
                                                                                                @method('DELETE')
                                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                                        </form>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-4">
                                <script>document.write(new Date().getFullYear())</script> © Vedharayam.
                            </div>
                            <div class="col-12 col-md-4 col-sm-4">
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