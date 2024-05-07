@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2>Home Page</h2>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 g-4">
            @forelse ($comics as $comic )
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
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