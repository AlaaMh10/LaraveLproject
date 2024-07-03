
<style>
img {
    display: block;
    overflow: hidden;
}

.container01 {
    max-width: 1500px;
    padding: 0 15px;
    margin: 0 auto;
}

.hero .container01 {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.hero-content {
    max-width: 465px;
}

.hero-content span {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    color: var( --text-color-primay);
}

.hero-content h1 {
    font-size: 62px;
    font-weight: 700;
    line-height: 93px;
    color: var(--text-color-title);
    margin: 12px 0 32px;
}

.hero-content p {
    font-size: 18px;
    font-weight: 600;
    color: var(--text-color-secondary);
    margin-bottom: 22px;
}

.hero-btns {
    display: flex;
    align-items: center;
    column-gap: 32px;
    margin-bottom: 40px;
}

.hero-btns a {
    font-size: 16px;
    font-weight: 700;
    color: #2A4DD0;
}

.hero-btns a:first-child {
    background: #2A4DD0;
    text-decoration: none;
    text-transform: uppercase;
    padding: 16px 32px;
    border-radius: 13px;
    color: #FFFFFF;
}

.hero-list {
    list-style-type: none;
    display: flex;
    align-items: center;
    column-gap: 20px;
}

.hero-list li {
    font-size: 14px;
    font-weight: 400;
    color: var(--text-color-secondary);
}

.hero-list li::before {
    content: url(../image/Done_ring_round_fill.svg);
    vertical-align: middle;
    margin-right: 8px;
}

.hero img {
    flex-basis: 48%;
    align-self: center;
}



    </style>

  <section class="hero">
    <div class="container01">
        <div class="hero-content">
            
            <h1>😎 Client Feedback</h1>
            <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
            <div class="hero-btns">
                <a href="#">share your feedback</a>
                
            </div>
            <ul class="hero-list">
                <li>No credit card required</li>
                <li>No software to install</li>
            </ul>
        </div>
  
        <img src="{{ asset('upload/comment/hero-image-simple-homepage.png') }}" alt="banner hero">
    </div>
  </section>
  </main>
  <script >

const darkmodeDark = document.querySelector('.darkmode-dark');
const darkmodeLight = document.querySelector('.darkmode-light');
const bodyVar = document.querySelector('body');
const headerLogo = document.querySelector('.header-logo');

darkmodeDark.addEventListener("click", (e) => {
    if(!bodyVar.classList.contains("var-dark")) {
        bodyVar.classList.toggle("var-dark")
        headerLogo.setAttribute('src', './image/alarado-icon-homepage-dark.svg')
        localStorage.setItem("theme", "dark")
    }
})

darkmodeLight.addEventListener("click", (e) => {
    if (bodyVar.classList.contains("var-dark")) {
        bodyVar.classList.toggle("var-dark")
        headerLogo.setAttribute('src', './image/alarado-icon-homepage.svg')
        localStorage.setItem("theme", "light")
    }
})

const theme = localStorage.getItem('theme');

if (theme === 'dark') {
    bodyVar.classList.toggle("var-dark")
    headerLogo.setAttribute('src', './image/alarado-icon-homepage-dark.svg')
    localStorage.setItem("theme", "dark")
}



  </script>
  
  
  
  
  </section>
  <!-- testimonial-area-end -->
  <!-- blog-area -->
