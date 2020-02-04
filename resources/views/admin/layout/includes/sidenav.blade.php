<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.4s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1bb52;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 50px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <li class="is-dropdown-menu="><a class="" href="{{url('/')}}">Home Page</a></li>

    <li class="submenu">
        <a href="#">
            <i class="glyphicon glyphicon-list"></i> Products
            <span class="caret pull-right"></span>
        </a>
        <!-- Sub menu -->
        <ul>
            <li><a href="{{route('product.create')}}">Add Product</a></li>
            <li><a href="{{route('product.index')}}">Products</a></li>

        </ul>
    </li>
    <li class="submenu">
        <a href="#">
            <i class="glyphicon glyphicon-list"></i> Category
            <span class="caret pull-right"></span>
        </a>

    <ul>
        <li><a href="{{route('category.index')}}">Add Category</a></li>
    </ul>
    </li>
    <li class="submenu">
        <a href="#">
            <i class="glyphicon glyphicon-list"></i> Orders
            <span class="caret pull-right"></span>
        </a>
        <!-- Sub menu -->
        <ul>
            <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
            <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
            <li><a href="{{url('admin/orders')}}">All Orders</a></li>
        </ul>
    </li>

    <li class="">
        <a class="navbar-brand" href="{{url('/logout')}}">
            <i class="fa fa-sign-out" ></i>

            <font color="red"> LogOut</font>
        </a></li>

</div>



<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>

</body>
</html>
