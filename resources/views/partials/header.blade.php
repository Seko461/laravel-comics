
<header>
    <nav class="nav d-flex justify-content-center align-items-center py-2">
        <a href="/">
            <img  src="{{ Vite::asset('resources/assets/images/dc-logo.png') }}" alt="">
        </a>
        <div class="links text-uppercase text-decoration-none gap-4" >
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'characters' ? 'nav-active' :''}}"href="{{route('characters')}}">CHARACTERS</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'comics' ? 'nav-active' :''}}"href="{{route('comics')}}">COMICS</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'movies' ? 'nav-active' :''}}"href="{{route('movies')}}">MOVIES</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'tv' ? 'nav-active' :''}}"href="{{route('tv')}}">TV</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'games' ? 'nav-active' :''}}"href="{{route('games')}}">GAMES</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'collectibles' ? 'nav-active' :''}}"href="{{route('collectibles')}}">COLLECTIBLES</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'videos' ? 'nav-active' :''}}"href="{{route('videos')}}">VIDEOS</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'fans' ? 'nav-active' :''}}"href="{{route('fans')}}">FANS</a>
            <a class="text-decoration-none mx-2 {{Route::currentRouteName() === 'news' ? 'nav-active' :''}}"href="{{route('news')}}">NEWS</a>
            
        </div>
        <div class="nav-item dropdown text-uppercase">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Shop
                </a>
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>

    </nav>
    <div class="jumbotron">
        
    </div>
</header>
