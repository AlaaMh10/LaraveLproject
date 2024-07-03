@extends('frontend.main_master')
@section('main')

@section('title')
PortFolio | Finansya Lab
@endsection

  <main>
    <style>
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .team-member h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .team-member p {
            font-size: 14px;
            color: #777;
        }
    </style>
<section class="portfolio">

    <div class="container mt-5">
        <div class="row">
          @foreach($portfolio as $item)
            <div class="col-md-4">
                <div class="team-member">
                        
       
                    <img src="{{$item->portfolio_image}}" alt="Team Member 1">
                    <h3>{{$item->portfolio_title}}</h3>
                    <p>{{ $item->portfolio_description}}</p>
                  </div>
                </div>
                @endforeach
           
        </div>
    </div>
            <!-- breadcrumb-area -->
            
            </section>
            <!-- contact-area-end -->



@endsection