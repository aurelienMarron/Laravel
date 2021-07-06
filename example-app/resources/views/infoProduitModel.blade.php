@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$product->picture}}" alt="Card image cap">
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
                <form method="GET" action="{{ route('cart.add', $product) }}" class="form-inline d-inline-block" >
                    {{ csrf_field() }}
                    <label>
                        <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" >
                    <button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
                    </label>
                </form>
            </div>
        </div>
    </div>
@stop
