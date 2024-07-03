@extends('frontend.main_master')
@section('main')

@section('title')
Home | Finansya Lab
@endsection
<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->
<!-- about-area -->
@include('frontend.home_all.home_about')
<!-- about-area-end -->

<!-- work-process-area -->
@include('frontend.home_all.home_work_process')
<!-- work-process-area-end -->
<!-- portfolio-area -->
@include('frontend.home_all.portfolio')
<!-- portfolio-area-end -->
<!-- partner-area -->
<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade.jpg') }}" alt="">
                        
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade1.jpg') }}" alt="">
                        
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade2.jpg') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade3.jpg') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade4.jpg') }}" alt="">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/trade5.jpg') }}" alt="">
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="partner__content">
                    <div class="section__title">
                        <span class="sub-title">05 - partners</span>
                        <h2 class="title">financial assets you can trade</h2>
                    </div>
                    <p>Explore our trading education platform! We offer courses for all levels, from beginners to experts. Learn at your own pace, anytime, anywhere. Join us and start your journey to becoming a better trader.</p>
                    <a href="contact.html" class="btn">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- partner-area-end -->
<!-- testimonial-area -->
@include('frontend.home_all.home_happy')
<!-- testimonial-area-end -->
<!-- blog-area -->
@include('frontend.home_all.home_indicator')
<!-- blog-area-end -->
<!-- contact-area -->

<section class="contact" id="contact">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");



.heading {
  font-size: 3.5rem;
  color: rgb(32, 32, 32);
  font-weight: 800;
  text-align: center;
}
.heading span {
  color: rgb(115, 3, 167);
}
/* contact section starts */
.contact {
    background: #e5ecfb;
    min-height: 60vh;
  }
  .contact .container {
    max-width: 1050px;
    width: 100%;
    background: #fff;
    border-radius: 1.5rem;
    margin: 0 auto;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    
  }
  .contact .container .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0rem 2rem;
  }
  .contact .content .image-box {
    max-width: 60%;
    margin-left: 8rem;
   

  }
  .contact .content .image-box img {
    width: 100%;
    height: 40rem;
    position: relative;
  }
  .contact .content form {
    width: 45%;
    margin-right: 3.5rem;
  }
  form .form-group {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .form-group .field {
    height: 50px;
    display: flex;
    position: relative;
    margin: 1rem;
    width: 100%;
  }
  form i {
    position: absolute;
    top: 50%;
    left: 18px;
    color: rgb(51, 51, 51);
    font-size: 17px;
    pointer-events: none;
    transform: translateY(-50%);
  }
  form .field input,
  form .message textarea {
    width: 100%;
    height: 100%;
    outline: none;
    padding: 0 16px 0 48px;
    font-size: 16px;
    font-family: "Poppins", sans-serif;
    border-radius: 5px;
    border: 1px solid rgb(51, 51, 51);
    background: #e5ecfb;
  }
  .field input::placeholder,
  .message textarea::placeholder {
    color: rgb(51, 51, 51);
  }
  .field input:focus,
  .message textarea:focus {
    padding-left: 47px;
    border: 2px solid rgb(115, 3, 167);
  }
  .field input:focus ~ i,
  .message textarea:focus ~ i {
    color: rgb(115, 3, 167);
  }
  form .message {
    position: relative;
    margin: 1rem;
    width: 100%;
  }
  form .message i {
    top: 25px;
    font-size: 20px;
    left: 15px;
  }
  form .message textarea {
    min-height: 130px;
    max-height: 230px;
    max-width: 100%;
    min-width: 100%;
    padding: 12px 20px 0 48px;
  }
  form .message textarea::-webkit-scrollbar {
    width: 0px;
  }
  form .button-area {
    display: flex;
    float: right;
    flex-direction: row-reverse;
  }
  .button-area button {
    color: #fff;
    border: none;
    outline: none;
    font-size: 1.8rem;
    cursor: pointer;
    border-radius: 5px;
    padding: 13px 25px;
    background: #2506ad;
    box-shadow: 0px 5px 10px rgba(48, 68, 247, 0.6);
    transition: 0.3s ease;
    font-family: "Nunito", sans-serif;
  }
  .button-area button:hover {
    background: #421cecf5;
  }
  .button-area span {
    font-size: 17px;
    padding: 1rem;
    display: none;
  }
  .button-area button i {
    position: relative;
    top: 6px;
    left: 2px;
    font-size: 1.5rem;
    transition: 0.3s;
    color: #fff;
  }
  .button-area button:hover i {
    left: 8px;
  }
  /* contact section media queries starts */
  @media (max-width: 900px) {
    .contact {
      min-height: 70vh;
    }
    .contact .container {
      margin: 3rem 0 2rem 0;
  
      
    }
    .contact .container .content {
      padding: 18px 12px;
  
      
    }
    .contact .content .image-box {
      display: none;
      
    }
    .contact .content form {
      width: 100%;
      margin-right: 2rem;
    }
  }
  /* contact section media queries ends */
  /* contact section ends */


</style>
  
    <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>
  
    <div class="container">
      <div class="content">
        <div class="image-box">
          <img draggable="false" src="./assets/img/contact/page_contact_home.jpg" alt="">
        </div>
      <form id="contact-form">
        
        <div class="form-group">
          <div class="field">
            <input type="text" name="name" placeholder="Name" required>
            <i class='fas fa-user'></i>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Email" required>
            <i class='fas fa-envelope'></i>
          </div>
          <div class="field">
            <input type="text" name="phone" placeholder="Phone">
            <i class='fas fa-phone-alt'></i>
          </div>
          <div class="message">
          <textarea placeholder="Message" name="message" required></textarea>
          <i class="fas fa-comment-dots"></i>
          </div>
          </div>
        <div class="button-area">
          <button type="submit">
            Submit <i class="fa fa-paper-plane"></i></button>
        </div>
      </form>
    </div>
    </div>
  </section>
  <!-- contact section ends -->
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

<script src="frontend\assets\js\script4.js"></script>
<!-- contact-area-end -->
@endsection