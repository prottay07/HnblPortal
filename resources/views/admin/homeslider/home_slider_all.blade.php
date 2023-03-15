@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('update.slider')}} " enctype= "multipart/form-data">
                           @csrf

                        <input type="hidden" name= "id" value = "{{ $homeSlide->id}}">

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Home Slider Edit Page</h4>
                                
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-5">
                                    <input class="form-control" name= "title" type="text"  id="example-text-input" value = " {{$homeSlide->title}} ">
                                    </div>
                                </div>
                                <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Short Title </label>
                <div class="col-sm-5">
                    <input class="form-control" name= "short_title" type="text"  id="example-text-input" value = " {{$homeSlide->short_title}} ">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Video URL </label>
                <div class="col-sm-5">
                    <input class="form-control" name= "video_url" type="text"  id="example-text-input" value = " {{$homeSlide->video_url}} ">
                </div>
            </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Home Slide Image</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="file" name= "home_slide" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                    <img id="imageUpload" class="squared-circle avatar-xl" src="{{ (!empty($homeSlide->home_slide))? 
                                        url($homeSlide->home_slide): url('upload/github.png') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Update Slide">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

</div>

<script type= "text/javascript">
$(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#imageUpload').attr('src', e.target.result);
            }
                reader.readAsDataURL(e.target.files['0']);

           

        })
})

</script>
@endsection