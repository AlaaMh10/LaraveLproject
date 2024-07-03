@extends('client.client_master')
@section('client')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content w-50 p-3">
    <div class="container-fluid">



        <div class="row ">

            <div class="card_profile">
                <div class="card_profile">
                    <div class="card-body card_profile ">

                        <h4 class="card-title">Edit Profile Page</h4>
                        <form method='post' action="{{route('savecustomer.profile')}}" enctype="multipart/form-data">
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
                            <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/user_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>


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
