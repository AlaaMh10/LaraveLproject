@php
$homeslide = App\Models\HomeSlide::find(3);
@endphp

<section class="banner">
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
    <title>Finansya |</title>
</head>
<body oncontextmenu="return false">
<!-- hero section starts -->
<section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
    <div class="banner__content">
    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $homeslide->title  }}</h2>
    <h2 class="elementor-heading-title elementor-size-default">{{ $homeslide->short_title  }}</h2>
    <p>Powerful <span class="typing-text"></span></p>
    </div>


    <a href="{{route('home.indicator')}}" class="btn"><span>Market Place</span>
      <i class="fas fa-arrow-circle-down"></i>
    </a>
    <!-- <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
          <li><a class="github" aria-label="GitHub" href="https://github.com" target="_blank"><i class="fab fa-github"></i></a></li>
          <li><a class="twitter" aria-label="Twitter" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a class="telegram" aria-label="Telegram" href="https://t.me" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com"><i class="fab fa-instagram" target="_blank"></i></a></li>
          <li><a class="dev" aria-label="Dev" href="https://dev.to" target="_blank"><i class="fab fa-dev"></i></a></li>
        </ul>
      </div> -->
    </div>
<div class="image">
    <img draggable="false" class="tilt" src="{{ $homeslide->home_slide  }}" alt="">
</div>
</section>
<!-- hero section ends -->
<style>
    /* hero section starts*/
.home {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    min-height: 100vh;
    align-items: center;
  }
  .home #particles-js {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }
  .home::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }
  .home .content {
    flex: 1 1 40rem;
    padding-top: 1rem;
    z-index: 1;
  }
  .home .image {
    flex: 1 1 40rem;
    z-index: 1;
  }
  .home .image img {
    width: 70%;
    margin-left: 6rem;
    border-radius: 20%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }
  .home .image img:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .home .content h2 {
    font-size: 5rem;
    font-weight: 800;
    color: #002057;
  }
  .home .content h2 span {
    font-size: 5rem;
    font-weight: 800;
    color: #ff7b00;
  }
  .home .content p {
    font-size: 2.5rem;
    color: #000;
    font-weight: 600;
    padding: 1rem 0;
  }
  .home .content p span {
    font-size: 2.5rem;
    color: rgb(148, 8, 8);
    font-weight: 600;
    padding: 1rem 0;
  }
  .home .btn {
    margin-top: 1rem;
    position: absolute;
    line-height: 0;
    padding: 1.6rem 3rem;
    border-radius: 4em;
    transition: 0.5s;
    color: #fff;
    background: #2506ad;
    box-shadow: 0px 5px 18px rgba(48, 68, 247, 0.6);
    font-family: "Nunito", sans-serif;
  }
  .home .btn span {
    font-weight: 700;
    font-size: 1.7rem;
    letter-spacing: 0.1rem;
  }
  .home .btn i {
    margin-left: 0.3rem;
    font-size: 1.5rem;
    transition: 0.3s;
  }
  .home .btn:hover {
    background: #1a047e;
  }
  .home .btn:hover i {
    transform: translateX(5px);
  }
</style>





<!-- particle.js links -->
<script src="frontend\assets\js\particles.min.js"></script>
<script src="frontend\assets\js\app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
// <!-- tilt js effect ends -->

// <!-- tilt js effect starts -->
    VanillaTilt.init(document.querySelectorAll(".tilt"), {
        max: 15,
    });
    /* ===== SCROLL REVEAL ANIMATION ===== */
const srtop = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 1000,
    reset: true
});
    
    
    /* SCROLL HOME */
srtop.reveal('.home .content h3', { delay: 200 });
srtop.reveal('.home .content p', { delay: 200 });
srtop.reveal('.home .content .btn', { delay: 200 });

srtop.reveal('.home .image', { delay: 400 });
srtop.reveal('.home .linkedin', { interval: 600 });
srtop.reveal('.home .github', { interval: 800 });
srtop.reveal('.home .twitter', { interval: 1000 });
srtop.reveal('.home .telegram', { interval: 600 });
srtop.reveal('.home .instagram', { interval: 600 });
srtop.reveal('.home .dev', { interval: 600 });

// <!-- typed js effect starts -->
var typed = new Typed(".typing-text", {
    strings: ["analytical tools", "softwares", "indicators"],
    loop: true,
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 500,
});
// <!-- typed js effect ends -->
</script>
</body>
</html>

    </section>