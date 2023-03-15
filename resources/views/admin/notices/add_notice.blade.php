@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
            <div class="col-12">
                <form method="post" action=" {{route('store.notice')}} " enctype= "multipart/form-data">
                    @csrf

               

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add New Notice</h4> <br><br>
                
         
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name= "notice_title" id="title">
                </div>
            </div>

              
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name= "notice_name" id="title">
                </div>
            </div>


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-10">
                    <input class="form-control" type="date" name= "notice_time_start" id="notice_time_start">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Due Date</label>
                <div class="col-sm-10">
                    <input class="form-control" type="date" name= "notice_time_end" id="notice_time_end">
                </div>
            </div>


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Notice Description </label>
                <div class="col-sm-10">
                <textarea class="form-control" id="elm1" name="notice_desc" > </textarea>
                </div>
            </div>




      

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Add Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name= "notice_img" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <img id="imageUpload" class="squared-circle avatar-xl" src="{{url('upload/github.png') }}" alt="Card image cap">
                </div>
            </div>
                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Add Notice">
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
