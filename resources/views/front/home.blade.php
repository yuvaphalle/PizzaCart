@extends('layout.main')
@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Welcome To PizzaZone
            </strong>
        </h2>
        <br>
        <a href="{{url('/pizzas')}}">
            <button class="button large">Pizza Menu</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
           PizzaZone Specials!!
        </h2>
    </div>

    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">

                    <a href="#">
                        <img src="{{URL::asset('./images/apple.png')}}" alt="profile Pic" height="200" width="200">
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Apple Dessert
                    </h3>
                </a>
                <h5>
                    $15
                </h5>
                <p>
                    Pizza crust, apple pie filling, crumble topping and a sweet icing drizzle.
                </p>
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">

                    <a href="#">
                        <img src="{{URL::asset('./images/chicken.png')}}" alt="profile Pic" height="200" width="200">
                    </a>
                </div>

                <a href="#">
                    <h3>
                        Chicken Pizza
                    </h3>
                </a>
                <h5>
                    $15
                </h5>
                <p>
                    Chicken, sweet Italian sausage, cremini and sliced red bell pepper
                </p>
                    <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{URL::asset('./images/tandori.png')}}" alt="profile Pic" height="200" width="200">
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Tandoori Pizza
                    </h3>
                </a>
                <h5>
                    $20
                </h5>
                <p>
                    Combine tandoori paste, lemon juice and yoghurt
                </p>
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{URL::asset('./images/veggie.png')}}" alt="profile Pic" height="200" width="200">

                    </a>
                </div>
                <a href="#">
                    <h3>
                    Veggie
                    </h3>
                </a>
                <h5>
                    $10
                </h5>
                <p>
                    Combine sour cream, cream cheese, dill weed, garlic salt and ranch dip mix
                </p>
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <br>




@endsection
