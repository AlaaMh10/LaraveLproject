@extends('client.client_master')
@section('client')

<div class="page-content">
<div class="container-fluid">
<h1>Profile</h1>


<div class="row">
                            <div class="col-md-6 col-xl-3">

                                <!-- Simple card -->
                                <div class="card card_profile"><br><br>
                                    <center>
                                    <img class="rounded-circle avatar-xl" src="{{ (!empty($clientData->profile_image))? url('upload/user_images/'.$clientData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Name : {{$clientData->name}}</h4>
                                        <hr>
                                        <h4 class="card-title">user Email : {{$clientData->email}}</h4>
                                        <hr>
                                        <h4 class="card-title">User Name : {{$clientData->username}}</h4>
                                
                            
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                            <h1 class="mt-5">Latest Transactions</h1>
                        <table class="table table-centered mb-0 align-middle table-hover table-nowrap mt-5">
                            <thead class="table-light">
                                <tr>
                                    <th>Status</th>
                                    <th style="width: 120px;">transaction date</th>
                                    <th>indicator</th>
                                    <th style="width: 120px;">amount</th>
                                </tr>
                            </thead><!-- end thead -->

                            <tbody>
                                @foreach ($transactions as $item)
                                
                                    
                                <tr>
                                    @if ($clientData->id==$item->client_id)
                                        

                                    <td>
                                        <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>{{$item->purchase}}</div>
                                    </td>
                                    
                                    <td>
                                        {{$item->created_at}}
                                    </td>
                                    <td>${{$item->indicator}}</td>
                                    <td>${{$item->amount}}</td>
                                </tr>
                                @endif
                                 <!-- end -->
                                 @endforeach
                                 
                                 


                                 
                        </table> <!-- end table -->


                        </div>





<div>

</div>


@endsection
