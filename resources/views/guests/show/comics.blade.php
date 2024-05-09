@extends('layout.app')

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 g-3 d-flex flex-column">
        <div class="comic-show-top-cover col-12">
            <img src="{{ $comic['thumb'] }}" alt="image of {{ $comic['title'] }}">
        </div>
        <div class="bottom-jumbo-banner">

        </div>

        <div class="col-12">
            <div class="body-info">
                <div class="container py-5">
                    <div class="body-content">
                        <h2 class="body-content-title text-uppercase">
                            {{ $comic['title'] }}
                        </h2>
                        <div class="availability d-flex">
                            <div class="left d-inline-flex align-items-center jusify-content-center flex-grow-1">
                                <div class="green-banner-text d-inline-flex ">U.S. Price:
                                    <span style="color:white; padding-left:.5rem"class="price ">$19.99</span>
                                </div>

                                <div class="availaible-info  flex-grow-1 text-uppercase">Available</div>


                            </div>

                            <div class="right ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Check Availability
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="body-content-text">
                            {!! $comic['description'] !!}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
