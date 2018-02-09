@extends('layouts.app')

@section('content')
    <a href="/products" class="btn btn-primary">Back</a>
    <h3>{{$product -> title}}</h3>

    <div>
        {!! $product->description !!}
    </div>
    <hr>
    <small>Added at {{$product -> created_at}} by {{$product -> user -> name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $product -> user_id)
            <a href="/products/{{$product -> id}}/edit" class="btn btn-default">Edit Item</a>

            {!! Form::open(['action' => ['ProductsController@destroy', $product -> id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close( ) !!}
        @endif
    @endif
@endsection