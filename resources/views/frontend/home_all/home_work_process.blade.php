<style>
    @import 'node_modules/modern-normalize/modern-normalize.css';
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');

:root {
    --transition-duration: .2s;
    --transition-timing-function: linear;
    --transition-delay: 0s;

    --text-color-demo-dark: #2c2c2c;
    --text-color-demo-light: #fff;

    --bg-demo-light: #fff;
    --bg-demo-dark: #2c2c2c;

}


.content {
    margin: 70px auto 60px;
    width: 100%;
}

.subtitle {
    margin-top: 0;
    margin-bottom: 50px; 
    text-align: center;
}

.container {

    display: flex;
    justify-content: space-between ;
    align-items: center;
    width: 95%;
    max-width: 1500px;
    margin: 0 auto;
    grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
    gap: 30px;
}


/* CARDS STYLES: YOU NEED THEM!!! */
.card {
    --card-text-color: #fff;

    position: relative;
    background-image: linear-gradient(to right bottom, var(--card-gradient-start), var(--card-gradient-end));
    border-radius: 10px;
    width: 360px;

}

.card:before {
    position: absolute;
    top: 5%;
    left: 5%;
    display: block;
    width: 90%;
    height: 95%;
    margin: auto;
    content: '';
    background-image: linear-gradient(to right, var(--card-shadow-gradient-start), var(--card-shadow-gradient-end));
    filter: blur(10px);
    z-index: -1;
}



.card:nth-child(1) {
    --card-gradient-start: #FAAC7A;
    --card-gradient-end: #F64D82;

    --btn-gradient-start: #FDC905;
    --btn-gradient-end: #FEB036;
    --btn-text-color: #FF3B8C;

    --card-shadow-gradient-start: #deaf00;
    --card-shadow-gradient-end: #FF3B8C;

    --icon-decorations-gradient: #FDC905;
}

.card:nth-child(2) {
    --card-gradient-start: #5BAEDD;
    --card-gradient-end: #644EDC;

    --btn-gradient-start: #89FDFD;
    --btn-gradient-end: #57DDE0;
    --btn-text-color: #184BB0;

    --card-shadow-gradient-start: #644EDC;
    --card-shadow-gradient-end: #57DDE0;

    --icon-decorations-gradient: #29faff;
}

.card:nth-child(3) {
    --card-gradient-start: #8C3FAE;
    --card-gradient-end: #3B0E61;

    --btn-gradient-start: #D367FF;
    --btn-gradient-end: #9738FF;
    --btn-text-color: #3A0D60;

    --card-shadow-gradient-start: #3B0E61;
    --card-shadow-gradient-end: #D367FF;

    --icon-decorations-gradient: #d97bff;
}

.card__content {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    padding: 40px 20px;
    font-size: 17px;
    font-weight: 500;
    color: var(--card-text-color);
    text-align: center;
    overflow: hidden;
}

.card__content:before,
.card__content:after {
    --rotation: -101deg;

    position: absolute;
    top: 0;
    right: -250px;
    display: block;
    width: var(--dimensions);
    height: var(--dimensions);
    content: '';
    background-image: conic-gradient(from 90deg, rgba(255, 255, 255, .2), transparent);
    border-radius: 50%;
    transform: rotate(var(--rotation));
}

.card__content:before {
    --dimensions: 400px;
}


.card__content:after {
    --dimensions: 370px;
}

.card__icon {
    position: relative;
    width: 200px;
    height: 150px;
}

.card__icon:before {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    content: '';
    background-image:
            radial-gradient(circle closest-side, var(--icon-decorations-gradient) 100%, rgba(255,255,255,0) 0),
            radial-gradient(circle closest-side, var(--icon-decorations-gradient) 100%, rgba(255,255,255,0) 0),
            radial-gradient(circle closest-side, var(--icon-decorations-gradient) 100%, rgba(255,255,255,0) 0);
    background-size: 15px 15px, 20px 20px, 15px 15px;
    background-position: 20px 20px, 160px 60px, 40px 90px;
    background-repeat: no-repeat;
    z-index: 1;
}

.card__icon svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    fill: rgba(255, 255, 255, .1);
    backdrop-filter: blur(7px);
    z-index: 2;
}

.card__icon img {
    position: relative;
    width: 70%;
    z-index: 3;
}

.card__title {
    position: relative;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    z-index: 2;
}

.card__title h3 {
    margin: 0;
}

.card__descr p:first-child {
    margin-top: 0;
}

.card__descr p:last-child {
    margin-bottom: 0;
}

.card__price {
    font-size: 40px;
    font-weight: bold;
    letter-spacing: 2px;
}

.card__btn-wrapper {
    margin-top: 10px;
}

.card__btn {
    padding: 15px 70px;
    color: var(--btn-text-color);
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: transform 0.2s linear 0s;
    border: none;
    border-radius: 100px;
    background-image: linear-gradient(to right, var(--btn-gradient-start), var(--btn-gradient-end));
    background-color: transparent;
    cursor: pointer;
}

.card__btn:hover {
    transform: scale(1.05);
}

.flash{
  width: 70px;
  height: 70px;
}

  </style>


<section class="work__process mb-5  ">
            <div class="section__title text-center">
                <span class="sub-title">03 - Working Process</span>
                <h2 class="title">Four Steps to Navigate Our Trading inducateur Platform</h2>
            </div>

    <div class="content">
      <div class="container">

        <div class="card"  style ='background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJgNYJmEIN99MBjMt6zK1w1eDaU-TwCYhDg&s"); 
   
   background-position: center; 
   background-repeat: no-repeat; 
   background-size: cover;'
   
   >
          <div class="card__content">


            <div class="card__icon" >
            <img src="{{ asset('frontend/assets/img/icons/work_process1.png') }}" alt="Candy Icon" />
            </div>

            <div class="card__price">
              <span>Step 1</span>
            </div>

            <div class="card__title">
              <h3>Registre</h3>
            </div>


            <div class="card__descr">
              <p>Fluffy chocolate cupcake with creamy frosting</p>
            </div>


            


            


          </div>
        </div>


          <img class="flash" src="{{ asset('frontend/assets/img/images/flash.png') }}" alt="">
      
        <div class="card">
          <div class="card__content">


            <div class="card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 340 300">
                <path id="&lt;Path&gt;" class="s0" d="m149.2 17.4c-64-5.4-102.7-35.7-134.7 0-32 35.7-17 153.4 112.1 183.6 129.5 30.3 194.9-58.1 198.4-108.7 3.5-50.6-19.8-89.3-68-89.8-50.6-0.5-78.3 17.4-107.8 14.9z"/>
              </svg>
              <img src="{{ asset('frontend/assets/img/icons/work_process2.png') }}" alt="Ice Cream Icon" />
            </div>


            <div class="card__price">
              <span>Step 2</span>
            </div>

            <div class="card__title">
              <h3>Explore</h3>
            </div>


            <div class="card__descr">
              <p>Discover bespoke indicators for tracking trends, </p>
            </div>


           


            

          </div>
        </div>
          <img class="flash" src="{{ asset('frontend/assets/img/images/flash.png') }}" alt="">
       
        <div class="card"  style ='background-image: url("https://w0.peakpx.com/wallpaper/799/6/HD-wallpaper-blue-blur-color-blue-blur-simple-background-deviantart.jpg"); 
   
   background-position: center; 
   background-repeat: no-repeat; 
   background-size: cover;'>
          <div class="card__content">


            <div class="card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" x="150px" y="150px" viewBox="0 0 361 246">
                <path id="&lt;Path&gt;" class="s0" d="m157.6 0.8c-85.9 0-145.2 46.6-155.9 122.2-10.8 75.6 49.2 137.5 113.2 119.5 63.9-18.1 87.2-34.1 127-21.5 70.7 22.3 125.1-8 117.9-70.3-9.4-82.5-81.1-150-202.2-149.9z"/>
              </svg>
              <img src="{{ asset('frontend/assets/img/icons/work_process3.png') }}" alt="Candy Icon" />
            </div>

            <div class="card__price">
              <span>Step 3</span>
            </div>


            <div class="card__title">
              <h3>Get your favorite indicator</h3>
            </div>
            

            <div class="card__descr">
              <p>Colorful candy swirls with a delightful burst of sweetness</p>
            </div>


            


            


          </div>
        </div>

      </div>
    </div>
   
    </section>
