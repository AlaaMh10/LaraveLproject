@php
$homeslide = App\Models\HomeSlide::find(3);
@endphp

<style></style>
<section class="banner">
    <div class="container custom-container">
      <div class="row d-flex align-items-center justify-content-center ">
        <div class="col-lg-6">
          <h4 class="wow fadeInUp" data-wow-delay=".2s"></h4>
          <!-- Add any relevant content here -->
        </div>
        <div class="col-lg-6">
          <div class="banner__content align-items-center justify-content-center">
            <h2 class="title wow fadeInUp" data-wow-delay=".2s">{{ $homeslide->title }}</h2>
            <h4 class="wow fadeInUp" data-wow-delay=".2s">{{ $homeslide->short_title }}</h4>
            <button class="btn"><a href="{{ route('login') }}">Sign Up For Free</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  