@extends('admin.layout.admin')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3>Products</h3>

                <div class="jumbotron">

                    <ul class="container">
        @forelse($products as $product)
            <li class="row">


                <div class="col-md-8">
                    <h4>Name of product:{{$product->name}}</h4>
    @empty
            <h3>No products</h3>

                </div>
        @endforelse
    </ul>

                </div>
            </div>
        </div>
    </div>

@endsection
