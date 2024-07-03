@php


$route = Route::current()->getName();


    $id = Auth::user()->id;
    $data = App\Models\User::find($id);

@endphp

<header>
<a href="{{route('home')}}" class="logo"><i class=""></i>Finansya</a>

<div id="menu" class="fas fa-bars"></div>
<nav class="navbar d-flex justify-content-between">
    <ul>
    <li ><a class="{{ ($route == 'home')? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
    <li ><a class="{{ ($route == 'about')? 'active' : '' }}" href="{{route('about')}}">About</a></li>
    <li ><a class="{{ ($route == 'MarketPlace')? 'active' : '' }}" href="{{route('MarketPlace')}}">Market Place</a></li>
    <li ><a class="{{ ($route == 'contact')? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a></li>
    <li class="profile_tag nav-item dropdown align-items-end">
                                    <a class=" profile_tag nav-link pe-0 show" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <div class="profile_tag d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                    <img class="rounded-circle" id="mini_profile_picture" src="{{ (!empty($data->profile_image))? url('upload/user_images/'.$data->profile_image):url('upload/no_image.jpg') }}" alt="User's profile image" style="border: 2px solid #5a8e4d">
                                    </div>
                                    <span class="ms-1 d-none d-xl-inline-block">
                                    <span class="text-dark">{{$data->name}}</span>
                                    </span>
                                    <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 14.586l-6.293-6.293a.999.999 0 1 1 1.414-1.414L10 11.758l5.879-5.879a.999.999 0 1 1 1.414 1.414L10 14.586z"></path>
                                    </svg>
                                    </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0 show" aria-labelledby="navbarDropdownUser" data-bs-popper="static">
                                    <div class="  dark__bg-1000 rounded-2 py-2">
                                    <a class="  dropdown-item" href="{{route('customer.profile')}}" ><svg class="img_tag svg-inline--fa fa-cog fa-w-16 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg><!-- <i class="fas fa-cog me-2"></i> Font Awesome fontawesome.com -->Profile &amp; Settings</a>
                                     <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('purchase')}}"><svg class="img_tag svg-inline--fa fa-shopping-cart fa-w-18 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg><!-- <i class="fas fa-shopping-cart me-2"></i> Font Awesome fontawesome.com -->Purchase History</a>
                                    <div class="dropdown-divider"></div>
                                    <input type="hidden" name="_token" value="tcVlL86HJoacCGgDSbyMEq37wPFj38Um5KRqxvRP"> <a class="dropdown-item" href="{{route('customer.logout')}}"> <svg class="img_tag svg-inline--fa fa-sign-out-alt fa-w-16 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg><!-- <i class="fas fa-sign-out-alt me-2"></i> Font Awesome fontawesome.com -->Logout
                                    </a>
                                    </div>
                                    </div>
                                    </li>
    
</ul>
<ul>

</ul>
</nav>
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
                           
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>