@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
            <div class="col-12">
                <form method="post" action=" {{route('update.gallery.image')}} " enctype= "multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value= "{{$editImage->id}}">

               

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit Gallery Image</h4> <br><br>
                
                <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name= "title" id="title" value = "{{$editImage->title}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                <select class="form-control" id="category" name="category" value = "{{$editImage->category}}">
                            <option>General</option>
                            <option> Training </option>
                            <option> Visit </option>
                            <option> Birthday</option>
                            <option>Environment</option>
                            <option>Blood Donation</option>
                </select>
                </div>
            </div> 


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Gallery Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name= "images" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <img id="imageUpload" class="squared-circle avatar-xl" src="{{asset($editImage->images) }}" alt="Card image cap">
                </div>
            </div>
                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Update Gallery Image">
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
