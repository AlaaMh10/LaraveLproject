@php
 $indicators = App\Models\Indicator::latest()->limit(4)->get();

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-png">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style5.css')}}">

    
</head>
<body oncontextmenu="return false">
<section class="work" id="work">
<h2 class="heading"><i class="fas fa-laptop-code"></i> MetaTrader <span>Indicators</span></h2>

  <div class="box-container">
    @foreach ($indicators as $item)
        
    <div class="box tilt">
      <img src="{{$item->image}}" alt="" />
      <div class="content">
           <div class="tag">
             <h3>{{$item->title}}</h3>
           </div>
           
           <div class="tag">
             <h3>{{$item->price}}$</h3>
           </div>
           <div class="desc">
             <p>{{$item->description}}
              </p><div class="btns">
               <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
               <a href="#" class="btn" target="_blank"><span>$</span>{{$item->price}}</a>
              </div>
            </div>
          </div>
        </div>    
        @endforeach
        
        @php
        
         $latestBlog = App\Models\Indicator::latest()->first()->limit(2)->get(); 
        @endphp
        @foreach ($latestBlog as $item1)
        
        <div class="box1 tilt">
          <img src="{{$item1->image}}" alt="" />
      <div class="content">
           <div class="tag">
             <h3>{{$item1->title}}</h3>
           </div>

           <div class="tag">
             <h3>{{$item1->price}}$</h3>
           </div>
           <div class="desc">
             <p>{{$item1->description}}
              </p><div class="btns">
               <a href="#" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
               <a href="#" class="btn" target="_blank"><span>$</span>{{$item1->price}}</a>
             </div>
           </div>
          </div>
        </div>    
        @endforeach

        <!-- <div class="viewall">
            <a href="./projects/index.html" class="btn"><span>View All</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div> -->

</section>
<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

<!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

<script src="{{asset('frontend/assets/js/script3.js')}}"></script>

</body>
</html>
