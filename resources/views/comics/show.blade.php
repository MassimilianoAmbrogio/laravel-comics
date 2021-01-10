@extends('layouts.main')

@section('content-main')
   <main class="comic-detail">
       <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
           <div class="container">
               {{-- Img cover --}}
               <img class="cover-img" src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
           </div>
           <div class="socials flex align-center">
              {{-- Socials --}}
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> 
              <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> 
              <a href="https://www.pinterest.it/"><i class="fab fa-pinterest"></i></a> 
              <a href="#"><i class="fas fa-plus"></i></a> 
           </div>
       </section>

       <div class="cont-show-blue">
           {{-- Cont Advertisement (img) --}}
            <div class="cont-img-adv">
                <p>Advertisement</p>
                <img src="../images/adv.png" alt="Img Advertisement">
            </div>
       </div>

       <section class="details mt-3 mb-3">
           {{-- Price title and text --}}
           <div class="container cont-price">
               <h1>{{ $comic['title'] }}</h1>
               <div class="price">U.S. Price: ${{ $comic['price'] }}
                    <span>Available on 11/10</span>
                    <small>Check Availability</small>
                    <i class="fas fa-sort-down icon-3"></i>
                </div>
               <div class="text">{!! $comic['body'] !!}</div>
           </div>
       </section>
   </main>
@endsection