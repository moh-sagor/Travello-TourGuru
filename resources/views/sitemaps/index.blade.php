@extends('Backend.main')
@section('backend_main')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Awesome !! Customize your site information.</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><b>N.B : </b> Upload your business information to customize your site.</li>
        </ol>

        <div class="row ">
            <div class="col-md-12 ">
                <div class="form-border mt-2">
                    <form action="{{ route('sitemaps.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Company Name</b></legend>
                                    <input type="text" class="form-control" id="sitename" name="sitename"
                                        placeholder="Enter your Company Name.">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Phone Number</b></legend>
                                    <input type="text" class="form-control" id="contact" name="contact"
                                        placeholder="Enter your Phone number.">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Company Office Address</b></legend>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter your Office Address.">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Social Media</b></legend>
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="Enter facebook page link.">

                                    <label for="facebook">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                        placeholder="Enter Twitter link.">
                                    <label for="facebook">Linkedin</label>

                                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                                        placeholder="Enter Linkedin link.">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Website Logo</b></legend>
                                    <div class="row">
                                        <div class="col-md-10 form-group mt-3"> <label class="form-label form-fonts"
                                                for="image">
                                                <p><b>N.B:</b>Try to use (png) Photo size (Height = 57, Width = 165) for
                                                    better output. otherwise automatically convet to this ratio and photo
                                                    not properly visualized as logo of your web page. </p>
                                            </label> <input type="file" class="form-control" id="image"
                                                name="image" accept="image/*" onchange="previewImage(event)" /> </div>
                                        <div class="col-md-2 form-group mt-3"> <img height="240" width="240"
                                                id="imagePreview" class="img-fluid" src="{{ asset('Frontend/dummy.png') }}"
                                                alt="Image Preview" /> </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <script>
                            function previewImage(event) {
                                var reader = new FileReader();
                                var imageField = document.getElementById("imagePreview");
                                reader.onload = function(image) {
                                    imageField.src = image.target.result;
                                }
                                reader.readAsDataURL(event.target.files[0]);
                            }
                        </script>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
