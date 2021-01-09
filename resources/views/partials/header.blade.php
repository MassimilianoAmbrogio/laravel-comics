{{--
    MAIN SITE HEADER
--}}
<header class="main-header">
    {{-- Power and additional --}}
    <div class="cont-power-add flex">
       <a href="#">DC Power℠ Visa®</a>
       <a href="#">Additional DC Sities</a>
       <i class="fas fa-sort-down"></i>
    </div>
    <div class="container">
        {{-- Logo home page --}}
        <a class="navbar-brand" href="{{ route('home-page') }}">
           <img src="{{ asset('images/logo.png') }}" alt="DC Comics logo">
        </a>
        
        <nav class="navbar-nav">
            {{-- Links --}}
            <ul class="lists flex">
                <li>
                    <a class="no-list" href="#">Characters</a>
                </li>
                <li>
                    <a class="no-list" href="#">Comics</a>
                </li>
                <li>
                    <a class="no-list" href="#">Movies</a>
                </li>
                <li>
                    <a class="no-list" href="#">Tv</a>
                </li>
                <li>
                    <a class="no-list" href="#">Games</a>
                </li>
                <li>
                    <a class="no-list" href="#">Collectibles</a>
                </li>
                <li>
                    <a class="no-list" href="#">Videos</a>
                </li>
                <li>
                    <a class="no-list" href="#">Fans</a>
                </li>
                <li>
                    <a class="no-list" href="#">News</a>
                </li>
                <li>
                    <a class="no-list" href="#">Shop
                        <i class="fas fa-sort-down icon-2 flex"></i>
                    </a>
                </li>
                <li>
                    <a class="search" href="#">Search</a>
                    <i class="fas fa-search flex"></i>
                </li>
            </ul>
        </nav>
    </div>
</header>