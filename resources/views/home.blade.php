@extends('layouts.main')

@section('content-main')
   <main class="wrap-home">
       <section class="general-hero">
           <div class="container">
               <img class="cover-img" src="{{ asset('images/cover-home.jpg') }}" alt="Teen go cover">
           </div>
       </section>

       <section class="comics mt-3 mb-3">
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
               </ul>
           </div>
       </section>
   </main>
@endsection
