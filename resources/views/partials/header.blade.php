
<header>
    <nav class="nav d-flex justify-content-center align-items-center py-2">
        <img  src="{{ Vite::asset('resources/assets/images/dc-logo.png') }}" alt="">
        <div class="links text-uppercase text-decoration-none gap-4">
            <a class="text-decoration-none mx-2"href="#">CHARACTERS</a>
            <a class="text-decoration-none mx-2"href="#">COMICS</a>
            <a class="text-decoration-none mx-2"href="#">MOVIES</a>
            <a class="text-decoration-none mx-2"href="#">TV</a>
            <a class="text-decoration-none mx-2"href="#">GAMES</a>
            <a class="text-decoration-none mx-2"href="#">COLLECTIBLES</a>
            <a class="text-decoration-none mx-2"href="#">VIDEOS</a>
            <a class="text-decoration-none mx-2"href="#">FANS</a>
            <a class="text-decoration-none mx-2"href="#">NEWS</a>
            
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
</header>
