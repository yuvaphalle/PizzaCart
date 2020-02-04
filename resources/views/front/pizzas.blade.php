@extends('layout.main')
@section('title','PIZZAS')
@section('content')
    <!-- products listing -->
    <br>


    <div class="row">
        @forelse($pizzas as $pizza)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">

                        <a href="#">
                            <img src="{{url('images',$pizza->image)}}" alt="profile Pic" height="200" width="200">
                        </a>
                    </div>
                    <a href="#">
                        <style>
                            h3 {
                                text-transform: lowercase;
                                line-height: 3;
                            }
                        </style>
                        <h3>
                            {{$pizza->name}}
                        </h3>
                    </a>
                    <h5>
                        $ {{$pizza->price}}
                    </h5>
                    <p>
                        {{$pizza->description}}
                    </p>
                        <a href="{{route('cart.edit',$pizza->id)}}" class="button expanded add-to-cart">
                            🛒 Add to Cart                    </a>
                </div>
            </div>
        @empty
            <h3>No shirts</h3>
        @endforelse
    </div>
@endsection
