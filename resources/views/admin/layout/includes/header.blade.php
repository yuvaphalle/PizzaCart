<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>
<link rel="stylesheet" href="{{asset("dist/css/foundation.css")}}"/>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">



    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="col-md-10">
                <!-- Logo -->


                <div class="logo">
                    <h1><a  href="{{route('admin.index')}}"><font color="#b8860b" size="10">Admin Panel</font></a></h1>
                </div>
            </div>

            <div class="col-md-2 ">
                <div  role="">
                    <nav  role="navigation">
                        <ul class="">

                                <style>
                                    b.uppercase {
                                        text-transform: uppercase;
                                        color: #3adb76;
                                    }
                                    </style>
                                <a  class="navbar-brand" data-toggle="dropdown"><b class="uppercase">{{Auth::user()->name}} </b></a>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
