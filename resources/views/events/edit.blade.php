@extends('Backend.main')
@section('backend_main')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Wow !! Edit Your Event.</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="form-border mt-2">
                    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Event Place</b></legend>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Event Name (Place Name)" value="{{ old('name', $event->name) }}">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Amount</b></legend>
                                    <input type="text" class="form-control" id="taka" name="taka"
                                        placeholder="Enter amount of event." value="{{ old('taka', (int) $event->taka) }}">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Tour Duration</b></legend>
                                    <input type="text" class="form-control" id="day" name="day"
                                        placeholder="How many days duration of tour. exp: (5 Days)"
                                        value="{{ old('day', $event->day) }}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Image</b></legend>
                                    <div class="row">
                                        <div class="col-md-9 form-group mt-3">
                                            <label class="form-label form-fonts" for="image"></label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*" onchange="previewImage(event)">
                                        </div>
                                        <div class="col-md-3 form-group mt-3">
                                            <img height="240" width="240" id="imagePreview" class="img-fluid"
                                                src="{{ old('image', asset($event->image)) }}" alt="Image Preview">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Event Date</b></legend>
                                    <div class="row">
                                        <div class="col-md-9 form-group mt-3">
                                            <input type="date" class="form-control" name="date"
                                                value="{{ old('date', $event->date) }}">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group border p-3">
                                    <legend class="float-none w-auto"><b>Description</b></legend>
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter event description.">{{ old('description', $event->description) }}</textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn btn-primary">Update Event</button>
                        </div>
                    </form>
                </div>
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

    </div>
@endsection
