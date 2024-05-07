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
    </div>
</section>
@endsection