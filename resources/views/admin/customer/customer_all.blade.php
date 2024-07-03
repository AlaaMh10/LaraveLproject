@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-14">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">All Customers</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Portfolio All Data </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($customers as $item)
                            @if ($item->role=='user')
                                
                            <tr>
                                <td> {{ $i++}} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->username }} </td>
                                <td> {{ $item->email }} </td>
                                <td> {{ $item->role}} </td>
                                
                                
                                <td class='d-inline-flex '>
                                    
                                    
                                    <a href="{{ route('customer.update',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                    
                                    <form method="post" action="{{ route('customer.delete') }} " enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{  $item->id }}">

                                        <button class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </button>
                                    </form>

                                    </td>
                                
                            </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection