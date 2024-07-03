@extends('frontend.main_master')
@section('main')


@php

$id = Auth::user()->id;
    $data = App\Models\User::find($id);    
@endphp

@section('title')
{{ $indicators->title }} | Finansya Lab
@endsection



<style>

a{
    color: unset;
    text-decoration: none;
}
.container{
    width: 1500px;
    margin: auto;
    max-width: 90vw;
    text-align: center;
    padding-top: 10px;
}
.title{
  font-size: 3.5rem;
  color: rgb(32, 32, 32);
  font-weight: 800;
  text-align: center;
  margin-top: 30px;
  margin-bottom: 30px;
}
.title span{

  color: #ff7b00;
}
.listProduct .item img{
    width: 90%;
    filter: drop-shadow(0 50px 20px #0009);
}
.listProduct{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.listProduct .item{
    background-color: #EEEEE6;
    padding: 20px;
    border-radius: 20px;
}
.listProduct .item h2{
    font-weight: 500;
    font-size: large;
}
.listProduct .item .price{
    letter-spacing: 7px;
    font-size: small;
}
/* detail page */

.detail{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
    text-align: left;
}
.detail .image img{
    width: 100%;
    border-radius: 15px;
}
.detail .image{
    position: relative;
}
.detail .image::before{
    position: absolute;
    width: 300px;
    height: 300px;
    content: '';
    background-color: #94817733;
    z-index: -1;
    border-radius: 190px 100px 170px 180px;
    left: calc(50% - 150px);
    top: 50px;

}
.detail .name{
    font-size: xxx-large;
    padding: 40px 0 0 0;
    margin: 0 0 10px 0;
}
.detail .price{
    font-weight: bold;
    font-size: x-large;
    letter-spacing: 7px;
    margin-bottom: 20px;
}
.detail .buttons{
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}
.detail .buttons button{
    background-color: #eee;
    border: none;
    padding: 15px 20px;
    border-radius: 20px;
    color: #000;
    margin: 5px;
    font-family: Poppins;
    font-size: large;
}
.detail .buttons svg{
    width: 15px;
}
.detail .buttons span{
    background-color: #555454;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin-left: 20px;
}
.detail .buttons button:nth-child(2){
    background-color: #2F2F2F ;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #eee;
    box-shadow: 0 10px 20px #2F2F2F77;
}
.detail .description{
    font-weight: 300;
}
h3{
  margin: 15px 15px 15px 0;
}
/* // ipad */
@media only screen and (max-width: 992px) {
    .listProduct{
        grid-template-columns: repeat(3, 1fr);
    }
    .detail{
        grid-template-columns:  40% 1fr;
    }
}


/* mobile */
@media only screen and (max-width: 768px) {
    .listProduct{
        grid-template-columns: repeat(2, 1fr);
    }
    .detail{
        text-align: center;
        grid-template-columns: 1fr;
    }
    .detail .image img{
        width: unset;
        height: 40vh;
    } 
    .detail .name{
        font-size: x-large;
        margin: 0;

    }
    .detail .buttons button{
        font-size: small;
    }
    .detail .buttons{
        justify-content: center;
    }
}


        .custom-width {
            width: 80%; /* Custom width for the table */
            margin: auto; /* Center align the table */
            margin-bottom: 120px;
            margin-top: 100px;
        }
   

</style>




<div class="content" id="content">
  <h1>Content</h1>
</div>


<div class="container">
        <div class="title">INDICATOR <span>DETAIL</span></div>
        <div class="detail">
            <div class="image">
                <img src="{{ (!empty($indicators->image))? url($indicators->image):url('upload/no_image.jpg') }}" alt="Image du produit" class="img-fluid" name='blog_image'>
            </div>
            <div class="content">
                <h1 class="name">{{$indicators->title}}</h1>
                <div class="price">{{$indicators->price}} $</div>
                <div class="buttons">
                    <li><h3>free version</h3> 
                       

                            
                            <button class="btn btn-primary"><a href="{{asset('upload/indicators/MT4free/'.$indicators->MT4_free)}}" download='{{$indicators->MT4_free}}'>MT4</a></button>
                     <button class="btn btn-primary"><a href="{{asset('upload/indicators/MT5free/'.$indicators->MT5_free)}}" download='{{$indicators->MT5_free}}'>MT5</a></button></li>
                    
                    <hr>
                    <li><h3>pro version</h3>
                     
                 <form action="" method="post">


                    <input type="hidden" value="{{$id}}" name="" id="">
                     <button class="btn btn-success"><a href="{{route('checkout',$indicators->id)}}">MT4 PRO</a> </button>
                     
                     <button class="btn btn-success"><a href="{{route('checkout',$indicators->id )}}">MT5 PRO</a></button></li>
                    </form>       
                       
                </div>

        </div>
        
        <div class="">
            <h3>Description</h3>
            <div class="description mb-5">{{$indicators->description}}</div>
            </div>
    </div>


    <table class="table custom-width">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Free Version</th>
      <th scope="col">Pro Version</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td><b>Accessibilité :</b></td>
      <td>Disponibles gratuitement sur diverses plateformes de trading et sites web.</td>
      <td>Souvent offerts par des développeurs spécialisés ou des sociétés financières.</td>
    
    </tr>
    <tr>
    
      <td><b>Fonctionnalités :</b></td>
      <td>Limités en termes de personnalisation et de complexité des algorithmes.</td>
      <td>Accès à des indicateurs exclusifs non disponibles dans les versions gratuites.</td>
    
    </tr>
    <tr>
    
      <td><b>Support et Documentation :</b></td>
      <td>Support limité, souvent sous forme de forums ou de guides en ligne.</td>
      <td>Support client dédié et souvent en temps réel.</td>
    
    </tr>
    <tr>
    
      <td><b>Mises à jour :</b></td>
      <td>Nouveautés et améliorations peuvent mettre plus de temps à être implémentées.</td>
      <td>Accès anticipé aux nouvelles fonctionnalités et améliorations.</td>
    
    </tr>

    <tr>
    
    <td><b>Fiabilité :</b></td>
    <td>Suffisants pour les traders débutants ou ceux qui préfèrent une approche simple.</td>
    <td>Convient mieux aux traders expérimentés et professionnels qui nécessitent des outils de pointe pour maximiser leurs profits.</td>
  
  </tr>
  </tbody>
</table>

    

    <script>
        let products = null;
        // get datas from file json
        fetch('products.json')
            .then(response => response.json())
            .then(data => {
                products = data;
                showDetail();
        })

        function showDetail(){
    // remove datas default from HTML
        let detail = document.querySelector('.detail');
        let listProduct = document.querySelector('.listProduct');
        let productId =  new URLSearchParams(window.location.search).get('id');
        let thisProduct = products.filter(value => value.id == productId)[0];
        //if there is no product with id = productId => return to home page
        if(!thisProduct){
            window.location.href = "/";
        }

        detail.querySelector('.image img').src = thisProduct.image;
        detail.querySelector('.name').innerText = thisProduct.name;
        detail.querySelector('.price').innerText = '$' + thisProduct.price;
        detail.querySelector('.description').innerText = '$' + thisProduct.description;


        (products.filter(value => value.id != productId)).forEach(product => {
            let newProduct = document.createElement('a');
            newProduct.href = '/detail.html?id=' + product.id;
            newProduct.classList.add('item');
            newProduct.innerHTML = 
            `<img src="${product.image}" alt="">
            <h2>${product.name}</h2>
            <div class="price">$${product.price}</div>`;
            listProduct.appendChild(newProduct);
        });
    }

    </script>
@endsection


