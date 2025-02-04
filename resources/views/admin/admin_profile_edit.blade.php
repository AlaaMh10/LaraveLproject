@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
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


        <div class="row">

            <div class="col-20">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Profile Page</h4>
                        <form method='post' action="{{route('store.profile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input name='name' class="form-control" type="text" value="{{ $editData->name }}" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">UserName</label>
                                <div class="col-sm-10">
                                    <input name='username' class="form-control" type="text" value="{{ $editData->username }}" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name='email' class="form-control" type="text" value="{{ $editData->email }}" id="example-text-input">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile image</label>
                                <div class="col-sm-10">
                                    <input name='profile_image' class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">

                            </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light " value="Update Profile">
                        </form>
                        <!-- end row -->




                    </div>


                    </div>
                    </div>
                    </div>





                </div>

            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });

                });


            </script>


            @endsection
