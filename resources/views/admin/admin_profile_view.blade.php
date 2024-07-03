@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">

   
                            <div class="col-md-6 col-xl-3">
                                <!-- Simple card -->
                                <div class="card card_profile"><br><br>
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
                                        <ul class="navbar-nav">
                                            <li class="nav-item has-arrow waves-effect">
                                                <a class="nav-link" href="{{route('edit.profile')}}">Edit Profile</a>
                                            </li>
                                            <li class="nav-item has-arrow waves-effect">
                                                <a class="nav-link" href="{{ route('change.password') }}">Security</a>
                                            </li>
                                        </ul>
                                    
                                    </nav>
                                    <center>
                                    <img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Name : {{$adminData ->name}}</h4>
                                        <hr>
                                        <h4 class="card-title">user Email : {{$adminData ->email}}</h4>
                                        <hr>
                                        <h4 class="card-title">User Name : {{$adminData ->username}}</h4>
                                    </div>
                                </div>

                            </div><!-- end col -->


                        </div>





<div>

</div>


@endsection
