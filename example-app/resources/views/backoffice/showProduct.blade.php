@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$product->picture}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nom: {{$product->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$product->id }}</li>
                        <li class="list-group-item">Prix:{{$product->price}}</li>
                        <li class="list-group-item">Poids:{{$product->weight}}</li>
                        <li class="list-group-item">Quantity: {{$product->quantity}}</li>
                        <li class="list-group-item">Dispo:{{$product->available}}</li>
                        <li class="list-group-item">Taille:{{$product->size}}</li>
                        <li class="list-group-item">Categorie id:{{$product->categories_id}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{route('indexproduct.create')}}"  class="btn btn-dark btn-outline-light">Update product</a>
    </div>
@stop
