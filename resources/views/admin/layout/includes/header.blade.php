<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>
<link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">



<div class="header">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a  class="" href="{{route('admin.index')}}">Admin Panel</a></h1>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                <div  role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li>
                                <style>
                                    b.uppercase {
                                        text-transform: uppercase;
                                        color: #3adb76;
                                    }
                                    </style>
                                <a  class="navbar-brand" data-toggle="dropdown"><b class="uppercase">{{Auth::user()->name}} </b></a>


                                <ul class="nav navbar-nav">
                                    <li class="is-dropdown-menu="><a class="" href="{{url('/')}}">Home Page</a></li>
                                    <li class="is-dropdown-menu"><a class="navbar-brand" href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>
