@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nom: {{$order->number}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$order->id }}</li>
                        <li class="list-group-item">Date de création:{{$order->date}}</li>
                        <li class="list-group-item">Auteur de la commande: {{$order->customer->last_name}}</li>
                    </ul></div>
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title">Contenu de la commande</h5>
                    <ul class="list-group list-group-flush">
                        @foreach($order->products as $product)
                        <li class="list-group-item">{{$product->name}}</li>
                        @endforeach
                    </ul></div>
            </div>
        </div>
    </div>
    <a href="{{route('indexorder.edit',[$order])}}"  class="btn btn-dark btn-outline-light">Update order</a>
    <form method="POST" action="{{route('indexorder.destroy',[$order])}}">
        @method('DELETE')
        @csrf
        <button  type="submit" class="btn btn-dark btn-outline-light">Delete order</button>
    </form>
    </div>
@stop
