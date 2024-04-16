@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">
                            <div class="col-md-6 col-xl-3">

                                <!-- Simple card -->
                                <div class="card"><br><br>
                                    <center>
                                    <img class="rounded-circle avatar-xl" src="{{ (!empty($adminDate->profile_image))? url('upload/admin_images/'.$adminDate->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Name : {{$adminDate ->name}}</h4>
                                        <hr>
                                        <h4 class="card-title">user Email : {{$adminDate ->email}}</h4>
                                        <hr>
                                        <h4 class="card-title">User Name : {{$adminDate ->username}}</h4>
                                        <hr>
                                        <a href="{{route('edit.profile')}}" class="btn btn-primary btn-rounded waves-effect waves-light">Edit Profile</a>

                                    </div>
                                </div>

                            </div><!-- end col -->


                        </div>





<div>

</div>


@endsection
