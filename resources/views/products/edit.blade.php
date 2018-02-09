@extends('layouts.app')

@section('content')
    <h3>Edit Item here</h3>
    {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $product->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $product->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'style' => 'height:80px', 'placeholder' => 'Describe product here'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Item Price')}}
        {{Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Enter Item Price'])}}
    </div>
    <div class="form-group">
        {{Form::label('quantity', 'Quantity')}}
        {{Form::text('quantity', $product->quantity, ['class' => 'form-control', 'placeholder' => 'Enter Item Quantity'])}}
    </div>
    <div class="form-group">
        {{Form::file('picture')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection