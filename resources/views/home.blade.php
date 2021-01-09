@extends('layouts.main')

@section('content-main')
   <main class="wrap-home">
       <section class="general-hero">
           {{-- Img cover --}}
           <div class="container">
               <img class="cover-img" src="{{ asset('images/cover-home.jpg') }}" alt="Teen go cover">
           </div>
       </section>

       <div class="container-blue">
           <p>Current Series</p>
       </div>
       {{-- Comics --}}
       <section class="comics mb-3">
           <div class="container">
               <ul class="comics-list no-list">
                   @foreach($comics as $comic)
                       <li>
                           <a class="no-list" href="{{ route('comic-detail', $comic['id']) }}">
                               <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                               <h3>{{ $comic['title'] }}</h3>
                           </a>
                       </li>
                   @endforeach
                   <div class="load flex align-center">
                      <p>Load More</p>
                   </div>
                </ul>
           </div>
           {{-- Cont img --}}
           <div class="cont-blue flex align-center">
              <img src="./images/digital-comics.png" alt="Digital comics">
              <p>Digital Comics</p>
              <img src="./images/merchandise.png" alt="Merchandise">
              <p>DC Merchandise</p>
              <img src="./images/subscriptions.png" alt="Subscription">
              <p>Subscription</p>
              <img src="./images/shop-locator.png" alt="Comic shop locator">
              <p>Comic Shop Locator</p>
              <img src="./images/power-visa.svg" alt="DC Power visa">
              <p>DC Power Visa</p>
           </div>
       </section>
       <div class="cont-white"></div>
   </main>
@endsection
