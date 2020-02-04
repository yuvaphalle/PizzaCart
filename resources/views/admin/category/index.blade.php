@extends('admin.layout.admin')

@section('content')



    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="jumbotron">

    <div class="navbar">
    <a class="navbar-brand" href="#">Categories =></a>
    <ul class="nav navbar-nav">
        @if(!empty($categories))
            @forelse($categories as $category)
                <li class="active">
                    <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
                </li>
            @empty
                <li>No Items</li>
            @endforelse
        @endif

    </ul>



    <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--products--}}
@if(!empty($products))


    <h3>Products</h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Products</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr><td>{{$product->name}}</td></tr>
        @empty
            <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>

@endif

@endsection
