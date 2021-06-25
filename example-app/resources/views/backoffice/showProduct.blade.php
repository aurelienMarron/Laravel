@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$produit->picture}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$produit->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$produit->id }}</li>
                        <li class="list-group-item">Prix:{{$produit->price}}</li>
                        <li class="list-group-item">Poids:{{$produit->weight}}</li>
                        <li class="list-group-item">Quantity: {{$produit->quantity}}</li>
                        <li class="list-group-item">Dispo:{{$produit->available}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
