


            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                <?php

$id = Auth::user()->id;
$adminData = App\Models\User::find($id);


?>

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="{{ (!empty($adminData->profile_image))? 
                                        url('upload/admin_images/'.$adminData->profile_image): url('upload/github.png') }}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{$adminData->name}}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{url('/dashboard')}}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> Home Slide Setup</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('home.slide')}}">Home Slider</a></li>
                                
                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> Employee Management</span>
                            </a>

                            <ul class="sub-menu" aria-expanded="false">                                
                                <li><a href="{{route('view.department')}}">View Department</a></li>
                                <li><a href="{{route('add.department')}}">Add Department</a></li>

                            </ul>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('add.section')}}">Add Section</a></li>
                                <li><a href="{{route('view.section')}}">View Section</a></li>

                            </ul>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('view.employee')}}">View Employee</a></li>
                                <li><a href="{{route('add.employee')}}">Add Employee</a></li>

                            </ul>
                        </li>

                                         
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> About Page Setup</span>
                            </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('about.page')}}">About Us</a></li>
                        <li><a href="{{route('about.multi_image')}}">About Multi Image</a></li>
                        <li><a href="{{route('all.multi.image')}}">All Multi Image</a></li>
                        
                        
                    </ul>
                        </li>
                
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> Image Gallery Setup</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('add.image')}}">Add Images</a></li>
                                <li><a href="{{route('all.image')}}">All Images</a></li>

                            </ul>
                        </li>

                        
                    <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> Notice Board Setup</span>
                            </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('all.notices')}}">All Notices</a></li>
                            <li><a href="{{route('add.notices')}}">Add Notices</a></li>

                        </ul>
                    </li>

                    <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-mail-send-line"></i>
                                <span> TPM Setup</span>
                            </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('view.pillars')}}">View Pillar</a></li>
                            <li><a href="{{route('add.notices')}}">Add Pillar</a></li>

                        </ul>
                    </li>

                    


                    

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>








                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->