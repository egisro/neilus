@extends('layouts.app')

@section('content')
<h3>Products</h3>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 30%" src="/storage/img/{{$product->picture}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/products/{{$product -> id}}">{{$product -> title}}</a></h3>
                        <small>{!! $product -> description !!}</small>
                    </div>

                </div>

            </div>
        @endforeach
        {{$products -> links()}}
    @else
        <p>No products found</p>
    @endif
@endsection