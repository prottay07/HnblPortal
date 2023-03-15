<header>
            <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu__wrap">
                                <nav class="menu__nav">
                                    <div class="logo">
                                        <a href="{{url('/')}}" class="logo__black"><img src="{{ asset ('frontend/assets/img/logo/Logo MAIN_PING.png')}}" alt=""></a>
                                        <a href="{{url('/')}}"  class="logo__white"><img src="" alt=""></a>
                                    </div>
                                    <div class="navbar__wrap main__menu d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="{{ url('/')}}">Home</a></li>
                                            <li><a href="{{route('home.about')}}">About</a></li>
                                            <li><a href="{{route('photo.gallery')}}">Photo Gallery</a></li>
                                            <li class="menu-item-has-children"><a href="#">Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="portfolio.html">TPM</a></li>
                                                    <li><a href="portfolio-details.html">Quality Circle</a></li>
                                                    <li><a href="portfolio-details.html">Kaizen</a></li>
                                                    <li><a href="portfolio-details.html">Hero Next</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Learning</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"> TPM </a></li>
                                                    <li><a href="#">5S</a></li>
                                                    <li><a href="#">Quality Circle</a></li>
                                                    <li><a href="#">General</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Info</a></li>
                                        </ul>
                                    </div>
                                    <div class="header__btn d-none d-md-block">
                                        <a href="{{'/login'}}" class="btn btn-sm btn-info btn-rounded">Login</a>
                                        <!-- <a href="{{'/register'}}" class="btn btn-sm btn-success btn-rounded">Register</a> -->
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile__menu">
                                <nav class="menu__box">
                                    <div class="close__btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html" class="logo__black"><img src="{{ asset ('frontend/assets/img/logo/logo_black.png')}}" alt=""></a>
                                        <a href="index.html" class="logo__white"><img src="{{ asset ('frontend/assets/img/logo/logo_white.png')}}" alt=""></a>
                                    </div>
                                    <div class="menu__outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu__backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>