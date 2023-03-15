@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
            <div class="col-12">
                <form method="post" action=" {{route('store.department')}} ">
                    @csrf

               

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add New Department</h4> <br><br>
                
         
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Dept. Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name= "dept_name" id="dept_name">
                </div>
            </div>

       

                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Add Department">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

</div>




@endsection
