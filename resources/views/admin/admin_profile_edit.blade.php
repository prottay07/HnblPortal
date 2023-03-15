@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('store.profile')}} " enctype= "multipart/form-data">
                           @csrf

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Admin Profile Edit</h4>
                                
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-5">
                                    <input class="form-control" name= "name" type="text"  id="example-text-input" value = " {{$editData->name}} ">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Email </label>
                                    <div class="col-sm-5">
                                        <input class="form-control" name= "email" type="email"  id="example-text-input" value = " {{$editData->email}} ">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="file" name= "profile_image" id="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                    <img id="imageUpload" class="squared-circle avatar-xl" src="{{ (!empty($editData->profile_image))? 
                                        url('upload/admin_images/'.$editData->profile_image): url('upload/github.png') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Update Profile">
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