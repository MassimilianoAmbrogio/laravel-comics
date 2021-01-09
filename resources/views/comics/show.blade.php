@extends('layouts.main')

@section('content-main')
   <main class="comic-detail">
       <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
           <div class="container">
               <img class="cover-img" src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
           </div>
           <div class="socials flex align-center">
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> 
              <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> 
              <a href="https://www.pinterest.it/"><i class="fab fa-pinterest"></i></a> 
              <a href="#"><i class="fas fa-plus"></i></a> 
           </div>
       </section>

       <div class="cont-show-blue"></div>

       <section class="details mt-3 mb-3">
           <div class="container">
               <h1>{{ $comic['title'] }}</h1>
               <div class="price">{{ $comic['price'] }}</div>
               <div class="text">{!! $comic['body'] !!}</div>
           </div>
       </section>
   </main>
@endsection