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

       <section class="details mt-3 mb-4">
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

       {{-- Talent specs --}}
       <div class="cont-tal-specs">
           <div class="cont-tal">
                <div class="tal">
                    <h1>Talent</h1>
                </div>
                <div class="art-by flex">
                    <p>Art by: <span>Sandy jarrell, Agnes Garbowska</span></p>
                </div>
                <div class="written-by">
                    <p>Written by: <span>P.C. Morrissey, Heather Nuhfer</span></p>
                </div>
           </div>
           <div class="cont-specs">
                <div class="specs flex align center">
                    <h1>Specs</h1>
                </div>
                <div class="series">
                    <p>Series: <span>{{ $comic['title'] }}</span></p>
                </div>
                <div class="Price">
                    <p>U.S. Price: <span>{{ $comic['price'] }}</span></p>
                </div>
                <div class="date">
                    <p>On Sale Date: <span>Nov 10 2020</span></p>
                </div>
           </div>
       </div>

       {{-- Cont img and text --}}
       <div class="cont-img-text flex">
           <div class="cont-1">
              <p>Digital Comics</p>
              <img src="../images/digital.png" alt="Img DC">
           </div>
           <div class="cont-2">
              <p>Shop DC</p>
              <img src="../images/shop.png" alt="Img Shop">
           </div>
           <div class="cont-3">
              <p>Comic Shop Locator</p>
              <img src="../images/locator.png" alt="Img Locator">
           </div>
           <div class="cont-4">
              <p>Subscriptions</p>
              <img src="../images/subscription.png" alt="Img Subscr">
           </div>
       </div>
   </main>
@endsection