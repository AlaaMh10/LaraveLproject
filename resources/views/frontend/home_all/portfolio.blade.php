@php
$portfolio = App\Models\Portfolio::latest()->get();
  @endphp
    
  
<style type="text/css">

h1
{
text-align: center;
color: #222;
padding-top: 20px;
}
.container
{
  width: 1500px;
height: 500px;



}
.sub-title {
  display: block;
  color: #FCAF17;
  line-height: 1;
  text-transform: uppercase;
  font-weight: 700;
  font-size: 15px;
  margin-bottom: 10px;
  letter-spacing: 0.1em; 
  text-align: center;
}
.card1
{
width: 300px;
height: 450px;
background: transparent;
border-radius: 10px;
margin-top: 40px;
margin-left: 20px;
position: relative;
}
.card1:hover
{
box-shadow: 0px 0px 20px 1px #9592927a;
}
.bg
{
width: 95%;
transform: rotate(90deg);
margin-left: 2px;
}
.one
{
  height: 60%;
width: 90%;
position: absolute;
top: 10px;
left: 10px;
}
.card1:hover .bg
{
transform: rotate(120deg);
}
.card1 h3
{
text-align: center;
color: #222;
cursor: pointer;
}
.card1 h4
{
text-align: center;
color: grey;
font-weight: 500;
}
.icon
{
text-align: center;
margin-top: 40px;
}
.icon ion-icon
{
font-size: 20px;
border-radius: 50%;
padding: 8px;
cursor: pointer;
background: #ffc400;
color: #fff;
border: 1px solid #ffc400;
opacity: 0;
}
.icon ion-icon:hover
{
color: grey;
border: 1px solid grey;
background: transparent;
}
.card1:hover .icon ion-icon
{
opacity: 1;
}
 
</style>
<section class="portfolio">
<span class="sub-title">04 - our team</span>
<h1 > our <span>Team</span></h1>
<div class="container">
@foreach($portfolio as $item)
<div class="card1">
<img class="bg" src="{{ asset('upload/bg/bg2.png') }}">
<img class="one" src="{{ asset($item->portfolio_image) }}">
<h3>{{$item->portfolio_name}}</h3>
<h4>{{$item->portfolio_description}}</h4>
<div class="icon">
<ion-icon name="logo-skype"></ion-icon>
<ion-icon name="logo-whatsapp"></ion-icon>
<ion-icon name="logo-facebook"></ion-icon>
<ion-icon name="logo-twitter"></ion-icon>
</div>
</div>
@endforeach

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</section>