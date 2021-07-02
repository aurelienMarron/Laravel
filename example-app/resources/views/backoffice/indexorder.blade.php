@extends('layout')

@section('content')
    <h1>Catalogue</h1>
    <div class="container">

        <a href="{{route('indexorder.create')}}"  class="btn btn-dark btn-outline-light">Create order</a>

        <div class="row">
            @foreach($listeOrder as $order)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div><a href="{{route('indexorder.show', [$order])}}">
                                <h5 class="card-title">{{$order->number}}</h5>
                            </a></div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Id: {{$order->id }}</li>
                            <li class="list-group-item">Date:{{$order->date}}</li>
                            <li class="list-group-item">Auteur de la commande: {{$order->customer->last_name}}</li>
                        </ul>


                    </div>
                </div>

            @endforeach
        </div>
    </div>


@stop
