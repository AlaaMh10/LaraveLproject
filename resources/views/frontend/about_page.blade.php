@extends('frontend.main_master')
@section('main')

@section('title')
About | Finansya Lab
@endsection

<main>

          

            <!-- about-area -->
<section class="about about__style__two">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about__image">
    <img src="{{ $aboutpage->about_image }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about__content">
    <div class="section__title">
        <span class="sub-title">01 - About Us</span>
        <h2 class="title">{{ $aboutpage->title }}</h2>
    </div>
    <div class="about__exp">
        <div class="about__exp__icon">
            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
        </div>
        <div class="about__exp__content">
            <p><span>{{ $aboutpage->short_title }}</span> </p>
        </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    <a href="about.html" class="btn">Download my resume</a>
</div>
</div>
</div>
<div class="row">
    <div class="col-12">
    <div class="about__info__wrap">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                role="tab" aria-controls="about" aria-selected="true">About</button>
        </li>
        
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button"
                role="tab" aria-controls="awards" aria-selected="false">awards</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button"
                role="tab" aria-controls="education" aria-selected="false">Our history</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <p class="desc">

{!! $aboutpage->long_description !!}

             </p>
                </li>
            </ul>
        </div>
      
        <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
            <div class="about__award__wrap">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_01.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Label</h5>
                                <p>FINANSYA LAB has been granted the Tunisian Startup Act label, recognizing our commitment to innovation and entrepreneurship in Tunisia. This designation underscores our role as a dynamic and forward-thinking company, contributing to the growth and development of the startup ecosystem in the region.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_02.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">verification MQL5</h5>
                                <p>FINANSYA LAB has successfully obtained MQL5 verification, a crucial step in ensuring the transparency and credibility of our company in the field of algorithmic trading. Recognized as a leading platform for trading robots and algorithms, MQL5 provides a certification that validates our trading strategies, performance, and compliance with industry standards.,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_03.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">User research award 2020</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="assets/img/images/awards_04.png" alt="">
                            </div>
                            <div class="award__content">
                                <h5 class="title">Dsigning award 2021</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="about__education__wrap">
                <div class="row">
                    
                <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Our history</h3>
                            <span class="date">Present</span>
                            <p>start-up tunisienne Finansya Lab spécialisée dans les technologie financière (2017)</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about__education__item">
                            <h3 class="title">Our history</h3>
                            <span class="date">Present</span>
                            <p>fondé par Achref sayadi, ingénieur  fintech et trader expérimenté (7 ans)</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- about-area-end -->

<!-- services-area -->

    <style>


.container3 {
    display: flex;
    justify-content: center;
    align-items: start;
    flex-wrap: wrap;
    padding: 0 40px;
    min-height: 400px;
    background: #F7F7F7;
}

.card3 {
    background: #287bff;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    position: relative;
    width: 320px;
    height: 450px;
    margin: 30px;
    border-radius: 20px;
    border-bottom-left-radius: 160px;
    border-bottom-right-radius: 160px;
    box-shadow: 0 15px 0 #fff,
            inset 0 -15px 0 rgba(255, 255, 255, 0.24),
            0 45px 0 rgba(0, 0, 0, 0.15);
    overflow: hidden;
     
}

.card3::before {
    content: "";
    position: absolute;
    top: -140px;
    left: -40%;
    padding: 0;
    width: 100%;
    height: 120%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2));
    transform: rotate(35deg);
    pointer-events: none;
    filter: blur(5px);
}

.card3:nth-child(1) {
    background: linear-gradient(to bottom, #ff2ae0, #645bf6);
}

.card3:nth-child(2) {
    background: linear-gradient(to bottom, #ffec61, #f321d7);
}

.card3:nth-child(3) {
    background: linear-gradient(to bottom, #24ff72, #9a4eff);
}

.card3 .icon {
    position: relative;
    width: 140px;
    height: 120px;
    background: #3c2846;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
    box-shadow: 0 15px 0 rgba(0, 0, 0, 0.1),
            inset 0 -8px 0 #fff;
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.card3 .icon::before {
    content: "";
    position: absolute;
    top: 0;
    left: -50px;
    width: 50px;
    height: 50px;
    background: transparent;
    border-top-right-radius: 50px;
    box-shadow: 15px -15px 0 15px #3c2846;
}

.card3 .icon::after {
    content: "";
    position: absolute;
    top: 0;
    right: -50px;
    width: 50px;
    height: 50px;
    background: transparent;
    border-top-left-radius: 50px;
    box-shadow: -15px -15px 0 15px #3c2846;
}

.card3 .icon ion-icon {
    color: #fff;
    position: relative;
    font-size: 6em;
    z-index: 1000;
    --ionicon-stroke-width: 24px;
}


.card3 .content1 {
    position: absolute;
    width: 100%;
    padding: 30px;
    padding-top: 150px;
    text-align: center;
}

.card3 .content1 h2 {
    font-size: 1.8em;
    color: #fff;
    margin-bottom: 15px;
}

.card3 .content1 p {
    color: #fff;
    line-height: 1.5em;
}


    </style>

<div class="section__title text-center">
    <span class="sub-title">02 - my Services</span>
    <h2 class="title">Provide awesome service</h2>
</div>
<div class="container3">


  <div class="card3">
    <div class="icon">
      <ion-icon name="globe-outline"></ion-icon>
    </div>
    <div class="content1">
      <h2>Trading Indicators </h2>
      <p>Access to the best collection of Free and Pro indicators & apps ! Improve your trading decision today !</p>
    </div>
  </div>
  <div class="card3">
    <div class="icon">
      <ion-icon name="diamond-outline"></ion-icon>
    </div>
    <div class="content1">
      <h2>Web Analytic Tools </h2>
      <p>Use our Analytics softwares to find patterns, analyze trends, market reversal opportunities, and more!</p>
    </div>
  </div>
  <div class="card3">
    <div class="icon">
      <ion-icon name="rocket-outline"></ion-icon>
    </div>
    <div class="content1">
      <h2>Smart Softwares</h2>
      <p>Unlock your trading potential with Indicatorsignals Softwares, developed by our experts & engineers!</p>
    </div>
  </div>
</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</section>
<!-- services-area-end -->

<!-- contact-area -->
<section class="homeContact">
<div class="container">
<div class="homeContact__wrap">
<div class="row">
<div class="col-lg-6">
    <div class="section__title">
        <span class="sub-title">07 - Say hello</span>
        <h2 class="title">Any questions? Feel free <br> to contact</h2>
    </div>
    <div class="homeContact__content">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
    </div>
</div>
<div class="col-lg-6">
    <div class="homeContact__form">
        <form action="#">
            <input type="text" placeholder="Enter name*">
            <input type="email" placeholder="Enter mail*">
            <input type="number" placeholder="Enter number*">
            <textarea name="message" placeholder="Enter Massage*"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- contact-area-end -->

        </main>

        


@endsection