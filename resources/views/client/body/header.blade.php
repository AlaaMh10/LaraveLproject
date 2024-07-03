<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.png')}}" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/Finansya.png')}}" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="{{route('dashboard')}}" class="logo logo-light">
                                <span class="logo-sm">
                                <img src="{{ asset ('assets/img/icons/finansya.png')}}" height="50" class="logo-dark mx-auto" alt="">
                                    
                                </span>
                                <span class="logo-lg">
                                <img src="{{ asset ('assets/img/icons/finansya.png')}}" height="50" class="logo-light mx-auto" alt="">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>




                    </div>

                    <div class="d-flex">


                    @php
                        $id = Auth::user()->id;
                        $data = App\Models\User::find($id);
                    @endphp




                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>



                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ (!empty($data->profile_image))? url('upload/user_images/'.$data->profile_image):url('upload/no_image.jpg') }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">{{$data->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('customer.profile') }}"><i class="ri-user-line align-middle me-1"></i> Profile & Settings</a>
                                <a class="dropdown-item" href="{{route('purchase') }}"><i class="ri-user-line align-middle me-1"></i> Purshase History</a>
                                <a class="dropdown-item text-danger" href="{{ route('customer.logout') }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>



                    </div>
                </div>
            </header>
