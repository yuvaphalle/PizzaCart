<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta https-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title',"PizzaZone")
    </title>
    <link rel="stylesheet" href="httpss://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
            <li>
                @unless(Auth::check())
                <a href="{{route('login')}}">
                    <i class="fa fa-sign-in" aria-hidden="true">
                    </i>
                  <b>  <font color="#b8860b" >LogIn</font></b>

                </a>

            @endunless
            </li>



            @if (Auth::check())
                <li class="">


                        <font color="#b8860b"  size="5">
                            <b> <i class="fa fa-user-circle-o"> {{Auth::user()->name}}</i></b>
                            &nbsp;</font>

                    </a></li>
            @endif


            @if (Auth::check())
                <li class="">

                <a class="navbar-brand" href="{{url('/logout')}}">

                    <font color="#b8860b"  size="5">
                        </font>
                    <i class="fa fa-sign-out" ></i>
                    <font color="red"> LogOut</font>
                </a></li>
            @endif






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
