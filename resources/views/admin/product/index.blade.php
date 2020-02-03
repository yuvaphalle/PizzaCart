@extends('admin.layout.admin')

@section('content')

    <h3>Products</h3>

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


@endsection
