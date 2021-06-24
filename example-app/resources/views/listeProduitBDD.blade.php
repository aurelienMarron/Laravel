@extends('layout')

@section('content')

@foreach($listeProduit as $product)
   <ul><li>Id: {{$product->id }}</li>'
       <li>Name:{{$product->name}}</li>
        <li>Prix:{{$product->price}} </li>
        <li>Image:<img src="{{$product->picture}}" alt="" width="200"></li>'
        <li>Poids:{{$product->weight}}</li>
        <li>Quantity: {{$product->quantity}} </li>
        <li>Dispo:{{$product->available}} </li></ul>
@endforeach
    @stop
