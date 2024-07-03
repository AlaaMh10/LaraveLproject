@extends('frontend.main_master')
@section('main')

@section('title')
Blog | Finansya Lab
@endsection

<main>
    
    <!-- breadcrumb-area -->
    <section class="work" id="work">

        <h2 class="heading"><i class="fas fa-laptop-code"></i> MetaTrader <span>Indicators</span></h2>
        
        <div id="filters" class="button-group">
          <button class="btn" data-filter=".mern">FREE</button>
          <button class="btn" data-filter=".lamp">POPULAR</button>
          <button class="btn" data-filter=".basicweb">NEW</button>
          <button class="btn" data-filter=".android">PRO</button>
        </div> 
      
        <section class="work" id="work">
      
        
          <div class="box-container">
        @foreach ($allindicators as $item)
            
        <div class="box tilt">
          <a href="{{route('indicator.details',$item->id)}}"><img src="{{$item->image}}" alt="" />
            <div class="content">
              <div class="tag">
                <a href="{{route('indicator.details',$item->id)}}"></a><h3>{{$item->title}}</h3></a>
              </div>
              
              <div class="tag">
                <h3>{{$item->price}}</h3>
              </div>
              <div class="desc">
                <p>{{$item->description}}
                </p><div class="btns">
                  <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
                  <a href="#" class="btn" target="_blank"><span>$</span>{{$item->price}}</a>
                </div>
              </div>
            </a>
            </div>
          </div>    
            @endforeach
            
      </section>
    </main>
                    <!-- contact-area-end -->
                    @endsection