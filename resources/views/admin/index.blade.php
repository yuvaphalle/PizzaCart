@extends('admin.layout.admin')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2>
                        Hello <a><b class="uppercase">{{Auth::user()->name}} </b></a>
<br>
                    </h2>
                    <p>
                        This is an admin page, where you can mange your products and orders
                    </p>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
