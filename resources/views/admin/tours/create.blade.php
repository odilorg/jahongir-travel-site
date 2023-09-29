@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <h2 class="content-heading">Add Tour</h2>

        <!-- Basic -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Basic</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Title</label>
                                <input type="text" value="{{ old('tour_title') }}"
                                    class="form-control  @error('tour_title')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_title" placeholder="Tour Title">
                                @error('tour_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Duration</label>
                                <input type="text" value="{{ old('tour_duration') }}"
                                    class="form-control  @error('tour_duration')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_duration" placeholder="Text Duration">
                                @error('tour_duration')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="example-textarea-input">Tour Description</label>
                                <textarea class="form-control  @error('tour_description')  {{ 'is-invalid' }} @enderror " id="example-textarea-input"
                                    name="tour_description" rows="4" placeholder="Tour Description"></textarea>
                                @error('tour_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Start end Points</label>
                                <input type="text" value="{{ old('tour_start_end_points') }}"
                                    class="form-control  @error('tour_start_end_points')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_start_end_points"
                                    placeholder="Tour Start end Points">
                                @error('tour_start_end_points')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Departure Time</label>
                                <input type="text" value="{{ old('tour_departure_time') }}"
                                    class="form-control  @error('tour_departure_time')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_departure_time" placeholder="Tour Departure Time">
                                @error('tour_departure_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour File</label>
                                <input type="file" value="{{ old('tour_file') }}" name="tour_file"
                                    class="form-control @error('tour_file')
                {{ 'is-invalid' }} @enderror"
                                    id="exampleInputEmail1">
                                @error('tour_file')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Code</label>
                                <input type="text" value="{{ old('tour_code') }}"
                                    class="form-control  @error('tour_code')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_code" placeholder="Tour Code">
                                @error('tour_code')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Tour Location</label>
                                <input type="text" value="{{ old('tour_location') }}"
                                    class="form-control  @error('tour_location')  {{ 'is-invalid' }} @enderror "
                                    id="example-text-input" name="tour_location" placeholder="Tour Location">
                                @error('tour_location')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit">Submit</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
<!------------>
<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Inline</h3>
    </div>
    <div class="block-content block-content-full">
      <div class="row">
        <div class="col-lg-4">
          <p class="text-muted">
            Using an inline layout can come really handy for small forms
          </p>
        </div>
        <div id="add_fields" class="col-lg-8 space-y-2">
          <!-- Form Inline - Default Style -->
          <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
            <div class="col-12">
              <label class="visually-hidden" for="example-if-email">Email</label>
              <input type="email" class="form-control" id="example-if-email" name="example-if-email" placeholder="Email">
            </div>
            <div class="col-12">
              <label class="visually-hidden" for="example-if-password">Password</label>
              <input type="password" class="form-control" id="example-if-password" name="example-if-password" placeholder="Password">
            </div>
            <div>
                <input class="btn btn-primary" id="add" type="button" value="ADD">
            </div>
          </form>
        </div>
          <!-- END Form Inline - Default Style -->

         
        </div>
      </div>
    </div>
  </div>

<!------------->


        

        <!-- END Basic -->
        <script>
            $(document).ready(function() {
               var html = '<div id="remove_fields" class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.html" method="POST" onsubmit="return false;"><div class="col-12"><label class="visually-hidden" for="example-if-email">Email</label><input type="email" class="form-control" id="example-if-email" name="example-if-email" placeholder="Email"></div><div class="col-12"><label class="visually-hidden" for="example-if-password">Password</label><input type="password" class="form-control" id="example-if-password" name="example-if-password" placeholder="Password"></div><div><input class="btn btn-danger" id="remove" type="button" value="REMOVE"></div></div>';
               var max = 10; 
               var x = 1;
               $("#add").click(function() {
                    if (x <= max) {
                        $("#add_fields").append(html);           
                        x++;    
                    }
                    
                });
                $("#add_fields").on('click', '#remove', function(){
                    $(this).closest('#remove_fields').remove();
                    x--;
                });
                
            });
        </script>





    </div>
@endsection