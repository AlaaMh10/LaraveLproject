<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    </head>
<body>
 


<style >
     
     .animation-ctn{
        margin-top: 80px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
     }

    

      
      /* other styles */
      /* .svg svg {
      display: none
      }
      */
      .inlinesvg .svg svg {
      display: inline
      }

      /* .svg img {
      display: none
      } */

      .icon--order-success svg polyline {
      -webkit-animation: checkmark 0.3s ease-in-out 0.9s backwards;
      animation: checkmark 0.9s ease-in-out 0.9s backwards
      }

      .icon--order-success svg circle {
      -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
      animation: checkmark-circle 0.6s ease-in-out backwards;
      }
      .icon--order-success svg circle#colored {
      -webkit-animation: colored-circle 0.6s ease-in-out 0.7s backwards;
      animation: colored-circle 0.6s ease-in-out 0.7s backwards;
      }
  </style>


        @include('frontend.body.header')

  <div class="animation-ctn">
        <div class="icon icon--order-success svg">
          <svg xmlns="http://www.w3.org/2000/svg" width="190px" height="190px">
              <g fill="none" stroke="#22AE73" stroke-width="2">
                <circle cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                <circle id="colored" fill="#22AE73" cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                <polyline class="st0" stroke="#fff" stroke-width="10" points="43.5,77.8 63.7,97.9 112.2,49.4 " style="stroke-dasharray:100px, 100px; stroke-dashoffset: 200px;"/>
              </g>
          </svg>
      </div>
      <br />
      <h2>Payment Success</h2>
    <p>Ref Id: 9034333842</p>
    <span class="alert"><button class="btn btn-primary"><a href="{{asset('upload/indicators/half_trend_indicator_for_MT5.mq5')}}" download='SHL-support-and-Resistance-free-mt5.ex5'>Download</a></button></li>
    </span>
  </div>


  <script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/particles.min.js')}}"></script>

        <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/element-in-view.js')}}"></script>
        <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     
</body>
</html>