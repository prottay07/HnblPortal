@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">

@php

$dept_name = App\Models\Department::all();
$section_name = App\Models\Section::all();

@endphp
            <div class="col-12">
                <form method="post" action=" {{route('store.employee')}} ">
                    @csrf

               

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add New Employee</h4> <br><br>

                <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Section Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name= "section_name" id="section_name">
                </div>
            </div>
                
         
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Dept. Name</label>
                <div class="col-sm-10">
                <select class="form-control" name= "dept_name" id="dept_name">
                <option value="" selected disabled hidden>Select Department</option>

            

                @foreach($dept_name as $item)

                        <option value="{{$item->dept_name}}"> {{$item->dept_name}}</option>

                @endforeach
                       
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Add Employee Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name= "emp_image" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <img id="imageUpload" class="squared-circle avatar-xl" src="{{url('upload/github.png') }}" alt="Card image cap">
                </div>
            </div>

       

                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Add Employee">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

</div>




@endsection

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
