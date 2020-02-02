@extends('admin.layout.admin')

@section('content')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="width: 30rem; ">
                    <div class="card-header">{{ __('Add Product') }}</div>

                    <div class="card-body align-self-center">

                    {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::text('description', null, array('class' => 'form-control','required' => 'true')) }}
                    </div>
                    <div class="form-group ">
                        {{ Form::label('size', 'Size') }}
                        {{ Form::select('size', [ 'small' => 'Small', 'medium' => 'Medium','large'=>'Large'], null, ['class' => 'form-control','required' => 'true']) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('category_id', 'Categories') }}
                        {{ Form::select('category_id', $errors, null, ['class' => 'form-control','placeholder'=>'Select Category', ]) }}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('image', 'Image') }}
                        {{ Form::file('image', array('class' => 'form-control', 'accept'=>'.png','required' => 'true') )}}
                    </div>

                    <div class="form-group ">
                        {{ Form::label('price', 'Price in $') }}
                        {{ Form::number('Price in $', null, array('class' => 'form-control','step' => '0.1', 'min' => '0', 'required' => 'true',)) }}
                    </div>

                    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
