@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('update.about')}} " enctype= "multipart/form-data">
                           @csrf

                        <input type="hidden" name= "id" value = "{{ $aboutPage->id}}">

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page Edit</h4>
                        
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                            <input class="form-control" name= "title" type="text"  id="example-text-input" value = " {{$aboutPage->title}} ">
                            </div>
                        </div>
                        <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Short Title </label>
                <div class="col-sm-10">
                    <input class="form-control" name= "short_title" type="text"  id="example-text-input" value = " {{$aboutPage->short_title}} ">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Short Description </label>
                <div class="col-sm-10">
                <textarea required="" name= "short_desc" class="form-control" rows="5" > {{$aboutPage->short_desc}}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Long Description </label>
                <div class="col-sm-10">
                <textarea id="elm1" name="long_desc" > {{$aboutPage->long_desc}}</textarea>
                </div>
            </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name= "about_image" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                    <img id="imageUpload" class="squared-circle avatar-xl" src="{{ (!empty($aboutPage->about_image))? 
                                        url($aboutPage->about_image): url('upload/github.png') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Update About Page">
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
