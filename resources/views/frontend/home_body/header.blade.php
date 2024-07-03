
<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="index.html" class="logo__black"><img src="{{asset('frontend/assets/img/logo/Capture_123456789.png')}}" alt=""></a>
                               
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class=""><a href="{{ route('HomePage') }}">Home</a></li>


                                    </li>
                                    <li class=""><a href="{{ route('home.blog') }}">Market Place</a>
                                    </li>


                                    {{-- <li ><a href="{{ route('home.blog') }}">login</a>/
                                    <a href="{{ route('home.blog') }}">register</a>
                                    </li> --}}
                                {{-- <li>
                                    <form action="{{url('search')}}" method="post" role="search">
                                        <div class="input_group">
                                            <input type="search" name="search" value="" placeholder="Search">
                                        </div>
                                        
                                    </li> --}}
                                    </form>
                                </ul>
                            </div>
                          
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{asset('frontend/assets/img/logo/logo_black.png')}}" alt=""></a>
                                
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