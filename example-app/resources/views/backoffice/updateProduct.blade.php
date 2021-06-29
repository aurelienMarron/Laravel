@extends('layout')

@section('content')

    <form method="post" action="{{route('indexproduct.store')}}">
        @csrf
        <ul><label>
                <li> <input type="text" name="name" value="{{$product->name}}"></li>
                <li> <input type="number" name="price"  value="{{$product->price}}" min="0"></li>
                <li> <input type="number" name="weight"  value="{{$product->weight}}" min="0"></li>
                <li> <input type="text" name="picture" value="{{$product->picture}}"></li>
                <li><input type="number" name="quantity" value="{{$product->quantity}}" min="0"></li>
                <li><input type="number" name="available" value="{{$product->available}}" min="0" max="1"></li>
                <li> <input type="number" name="size"  value="{{$product->size}}" min="0"></li>
                <li> <input type="number" name="categories_id" value="{{$product->categories_id}}" min="0"></li>
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Mise à jour</button>
    </form>

@stop
