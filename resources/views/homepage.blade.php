@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
        <span class="current text-uppercase fs-2">Current series</span>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
            @forelse ($comics as $comic )
            <div class="col">
                <div class="card h-100 rounded-0 border-0 bg-transparent text-white" >
                    
                        <img height="200"src="{{$comic['thumb']}}" alt="">
                
                        <div class="titolo px-1 ">
                            {{$comic['title']}}
                        </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>Nothing to show here, sorry 😢</p>
            </div>

            @endforelse
        </div>
        <div class="main-button text-center">
            <button type="button" class="btn btn-primary rounded-0 text-uppercase px-3">Load More</button>

        </div>
        
    </div>
</section>
<div class="main-bottom">
        <ul class="d-flex justify-content-center align-items-center list-unstyled">
            <li>
                <img width="50" src="{{Vite::asset('resources/assets/images/buy-comics-digital-comics.png')}}" alt="">
            </li>
            <li>
                <img width="50" src="{{Vite::asset('resources/assets/images/buy-comics-merchandise.png')}}" alt="">
            </li>
            <li>
                <img width="50" src="{{Vite::asset('resources/assets/images/buy-comics-shop-locator.png')}}" alt="">
            </li>
            <li>
                <img width="50" src="{{Vite::asset('resources/assets/images/buy-comics-subscriptions.png')}}" alt="">
            </li>
            <li>
                <img width="50" src="{{Vite::asset('resources/assets/images/buy-dc-power-visa.svg')}}" alt="">
            </li>
        </ul>
    </div>
@endsection