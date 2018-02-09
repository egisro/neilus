@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/products/create" class="btn btn-primary">Create new Item</a>
                    <h3>Your Items</h3>
                        @if(count($products) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th></th>
                                </tr>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->title}}</td>
                                        <td><a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!! Form::open(['action' => ['ProductsController@destroy', $product -> id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!! Form::close( ) !!}
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach

                            </table>
                        @else
                            <p>You have no products</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
