@extends('admin.admin_master')

@section('admin')

<div class="page-content">
<div class="container-fluid">
<div class="row">
                            <div class="col-md-6 col-xl-6">
        
                                <!-- Simple card -->
                                <div class="card">
                                    <center>
                                    <img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image))? 
                                        url('upload/admin_images/'.$adminData->profile_image): url('upload/github.png') }}" alt="Card image cap">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Name: {{ $adminData->name }} </h4>
                                            <hr>
                                        <h4 class="card-title">Email: {{ $adminData->email }} </h4>

                                        <a href="{{route('edit.profile')}} " class="btn btn-primary waves-effect waves-light">Edit</a>
                                        <hr>
                                        
                                    </div>

                                    
                                </div>
        
                            </div><!-- end col -->
        
 
                        </div>
</div>
</div>
@endsection