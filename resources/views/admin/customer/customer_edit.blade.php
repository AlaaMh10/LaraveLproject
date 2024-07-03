@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Customer Edit Page </h4>

            <form method="post" action="{{ route('customer.edit') }}" enctype="multipart/form-data">
                @csrf

               <input type="hidden" name="id" value="{{  $customer->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Customer Name</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" type="text" value="{{ $customer->name }}" id="example-text-input">
                    @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> UserName </label>
                <div class="col-sm-10">
                    <input name="username" class="form-control" type="text" value="{{ $customer->username }}" id="example-text-input">

                    @error('username')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Email </label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="text" value="{{ $customer->email }}" id="example-text-input">

                    @error('email')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Role </label>
                <div class="col-sm-10">
                    <input name="role" class="form-control" type="text" value="{{ $customer->role}}" id="example-text-input">

                    @error('role')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            <!-- end row -->



            
            </div>
            <!-- end row -->

             
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Portfolio Data">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


@endsection 