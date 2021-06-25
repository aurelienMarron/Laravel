@extends('layout')

@section('content')

    <h1>Catalogue</h1>
    <div class="container">
        <div class="row">
            @foreach($listeProduit as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div><a href="/infoProduitModel/{{$product->id}}">
                                <img class="card-img-top" src="{{$product->picture}}" alt="Card image cap">
                            </a></div>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Id: {{$product->id }}</li>
                            <li class="list-group-item">Prix:{{$product->price}}</li>
                            <li class="list-group-item">Poids:{{$product->weight}}</li>
                            <li class="list-group-item">Quantity: {{$product->quantity}}</li>
                            <li class="list-group-item">Dispo:{{$product->available}}</li>
                        </ul>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@stop
