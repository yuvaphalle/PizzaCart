<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title',"PizzaZone")
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>
    <link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>


</head>
<body>

<div  class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 >
            <a href="{{route('home')}}">
                <img src="{{URL::asset('./images/logo.png')}}" alt="profile Pic" height="20" width="50">
                PizzaZone
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('pizzas')}}">
                    PIZZA MENU
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    CART
                    <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>
@yield('content')
<footer class="footer">

</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
