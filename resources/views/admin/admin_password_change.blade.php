@extends('admin.admin_master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

@if (count($errors))
    @foreach ($errors->all() as $error)

        <p class= " alert alert-danger alert-dismissible fade show"> {{ $error }} </p>

    @endforeach

@endif
<div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('update.password')}} ">
                           @csrf

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Admin Password Change</h4>
                                
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-5">
                                    <input class="form-control" name= "oldpassword" type="password"  id="example-text-input" >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-5">
                                    <input class="form-control" name= "newpassword" type="password"  id="example-text-input" >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-5">
                                    <input class="form-control" name= "confirm_password" type="password"  id="example-text-input" >
                                    </div>
                                </div>
                                <!-- end row -->






                                <input type="submit" class= "btn btn-info waves-effect waves-light" value="Change Password">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

</div>


</script>
@endsection