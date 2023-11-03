@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css"  />
<style type="text/css">
    .preview {
        overflow: hidden;
        width: 160px; 
        height: 160px;
        margin: 10px;
        border: 1px solid red;
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
                                    <h4 class="mb-sm-0 font-size-18">Form Elements</h4>

                                    <div class="page-title-right">
                                        {{-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mt-1">
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session::get('error') }}
                                            </div>
                                        @else
                                            <h4 class="font-size-18">Add Blog</h4>
                                        @endif
                                        </div>

                                        <h4 class="card-title mb-4"></h4>
                                        <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Blog Title</label>
                                            <div class="col-10 col-md-6">
                                                <input class="form-control" type="text" id="example-text-input" name="name" value="{{ $blog->name }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Blog Description</label>
                                            <div class="col-10 col-md-6">
                                                <input class="form-control" type="text" id="example-text-input" name="des" value="{{ $blog->des }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Blog Thumbnail</label>
                                            <div class="col-10 col-md-6">
                                                <input class="form-control image" type="file" id="formFile" name="thumbnail">
                                                <input type="hidden" id="croppedImage" name="croppedImage">
                                                @if($errors->has('error'))
                                                <p class="text-danger">
                                                    {{ $errors->first('error') }}
                                                </p>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Current Blog Thumbnail</label>
                                            <div class="col-10 col-md-6">
                                                @if($blog->thumbnail)
                                                    <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="Current Thumbnail" height="100">
                                                @else
                                                    No thumbnail available.
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Blog Details</label>
                                            <div class="col-10 col-md-10">
                                                <textarea name="content" rows="20" cols="80">{{$blog->content}} </textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-plus  label-icon"></i> Create New</button>
                                            </div>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
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


            
            
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Crop image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">  
                                        <img id="image-cropped" height="300">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info close-button" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="crop">Crop</button>
                        </div>
                    </div>
                </div>
            </div>
          
            
            

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>              
            <script>
              var bs_modal = $('#modal');
              var image = document.getElementById('image-cropped');
              var imageInput = document.getElementById('formFile'); 
              var cropper, reader, file;
              
              $("body").on("change", ".image", function(e) {
                  var files = e.target.files;
                  var done = function(url) {
                      image.src = url;
                      bs_modal.modal('show');
                  };
                  $('.close-button').on('click', function() {
                      bs_modal.modal('hide');
                  });
                  $('.delete-modal').on('click', function() {
                      bs_modal.modal('show');
                  });
          
                  if (files && files.length > 0) {
                      file = files[0];
          
                      if (URL) {
                          done(URL.createObjectURL(file));
                      } else if (FileReader) {
                          reader = new FileReader();
                          reader.onload = function(e) {
                              done(reader.result);
                          };
                          reader.readAsDataURL(file);
                      }
                  }
              });
          
              bs_modal.on('shown.bs.modal', function() {
                  cropper = new Cropper(image, {
                      aspectRatio: 16/10,
                      viewMode: 1,
                      preview: '.preview'
                  });
              }).on('hidden.bs.modal', function() {
                  if (cropper) {
                      console.log('Cropper Updated');
                      cropper.destroy();
                      cropper = null;
                      if (image.src) {
                          imageInput.value = image.src;
                      }
                  }
              });
          
              $("#crop").click(function() {
                  
                  canvas = cropper.getCroppedCanvas({
                      width: 450,
                      height: 450,
                  });
          
                  canvas.toBlob(function(blob) {
                      url = URL.createObjectURL(blob);
                      var reader = new FileReader();
                      reader.readAsDataURL(blob);
                      reader.onloadend = function() {
                          var base64data = reader.result;
                          $('#image-cropped').attr('src', base64data);
                          $('#croppedImage').val(base64data);
                          bs_modal.modal('hide');
                      };
                  });
              });
          </script>
          







            @endsection