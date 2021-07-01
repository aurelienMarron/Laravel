@extends('layout')

@section('content')
    <h1>Catalogue</h1>

    <div class="container">
        <div class="row">
@foreach($orders as $order)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$order->id}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id de la commande:{{$order->id}}</li>
                        @foreach($order->products as $product)
                            <li class="list-group-item">Nom du produit:{{$product->name}}</li>
                            <li class="list-group-item">Quantité:{{$product->pivot->quantity}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
    @endforeach
        </div>
    </div>

    @stop
