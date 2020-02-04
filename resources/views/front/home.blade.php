@extends('layout.main')
@section('content')



    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <section class="hero text-center">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <h2>
                        <strong>
                            Welcome PizzaZone world's best pizza🍕
                        </strong>
                    </h2>
                    <br>
                    <a href="{{url('/pizzas')}}">
                        <button class="button large">Check our delicious menu</button>
                    </a>
                </section>
                <br/>
                <div class="jumbotron">

                    <ul class="container">
                        @forelse($pizzas->chunk(4) as $chunk)
                            @foreach($chunk as $pizza)


                                <div class="small-3 columns">
                                    <div class="item-wrapper">
                                        <div class="img-wrapper">

                                            <a href="#">
                                                <img src="{{url('images',$pizza->image)}}" alt="profile Pic" height="200" width="200">
                                            </a>
                                        </div>

                                        <a href="{{route('pizza')}}">
                                            <h3>
                                                {{$pizza->name}}
                                            </h3>
                                        </a>
                                        <h5>
                                            {{$pizza->price}}
                                        </h5>
                                        <p>
                                            {{$pizza->description}}
                                        </p>
                                        <a href="{{route('cart.edit',$pizza->id)}}" class="button expanded add-to-cart">
                                            🛒 Add to Cart
                                        </a>
                                    </div>
                                </div>


                            @endforeach
                            @if($loop->index == 0)
                                @break
                            @endif
                        @empty
                            <h3>No shirts</h3>
                        @endforelse
                    </ul>
                    <script>
                        var msg = '{{Session::get('alert')}}';
                        var exist = '{{Session::has('alert')}}';
                        if(exist){
                            alert(msg);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

@endsection


