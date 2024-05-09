@extends('layout.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <span class="current text-uppercase fs-2">Current series</span>
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
                @forelse ($comics as $index => $comic)
                    <div class="col">
                        <a href="{{ route('guests.show.comics', ['id' => $index]) }}">
                            <div class="card h-100 rounded-0 border-0 bg-transparent text-white">

                                <img height="200"src="{{ $comic['thumb'] }}" alt="">

                                <div class="titolo px-1 ">
                                    {{ $comic['title'] }}
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Image not found, sorry</p>
                    </div>
                @endforelse
            </div>
            <div class="main-button text-center">
                <button type="button" class="btn btn-primary rounded-0 text-uppercase px-3">Load More</button>

            </div>

        </div>
    </section>
    <div class="main-bottom">
        <div class="container">
            <ul class="d-flex justify-content-around align-items-center list-unstyled ">
                <li>
                    <img width="50" src="{{ Vite::asset('resources/assets/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img width="50" src="{{ Vite::asset('resources/assets/images/buy-comics-merchandise.png') }}"
                        alt="">
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <img width="50" src="{{ Vite::asset('resources/assets/images/buy-comics-shop-locator.png') }}"
                        alt="">
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img width="50" src="{{ Vite::asset('resources/assets/images/buy-comics-subscriptions.png') }}"
                        alt="">
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img width="50" src="{{ Vite::asset('resources/assets/images/buy-dc-power-visa.svg') }}"
                        alt="">
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
