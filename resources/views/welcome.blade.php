<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <!-- preloader-start -->
        <header>
<a href="index.html" class="logo">Finansya</a>

<nav class="navbar d-flex justify-content-between">
    <ul>
    <!-- <li><a href="{{route('home.indicator')}}">MT4/MT5 Guide</a></li> -->

                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('register')}}">Register</a>
                </li>
            </ul>
           
            </div>
          </nav>
        </header>

        <!-- header-area-end -->

        <!-- main-area -->
       
        <!-- main-area-end -->
        @include('frontend.home_all.home_slide')



        <!-- Footer-area -->
        @include('frontend.body.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->
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

</script>  
    </body>
</html>
