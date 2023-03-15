@extends('admin.admin_master')

@section('admin')

<div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Data Tables</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Tables</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">



<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Title</th>
                       
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                    </thead>


                    <tbody>
                    @php ($i = 1)
                    @foreach($allNotice as $notice)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$notice->notice_title}}</td>
                        
                        <td> <img src= "{{asset($notice->notice_img)}}" style= "width:60px; height:60px"> </td>
                        <td>
                            <a class="btn btn-info sm" title = "Edit" href=" {{route('edit.notice', $notice->id)}} "><i class="fas fa-edit"></i> </a>
                            
                            <a class="btn btn-danger sm" title = " Delete"href=" {{route('delete.notice', $notice->id)}} " id= "delete"><i class="fas fa-trash-alt"></i> </a>
                        </td>
 
                    </tr>
                @endforeach



                    </tbody>
                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <!-- end row-->




                <!-- end row-->
                
            </div> <!-- container-fluid -->
        </div>

@endsection