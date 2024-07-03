@extends('client.client_master')
@section('client')


@php

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

@endsection