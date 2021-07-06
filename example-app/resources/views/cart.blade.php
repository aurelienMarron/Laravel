@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Panier</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                            @foreach ($data as $key => $value)
                                <li>Nom du produit: {{ $value['produit']->name }}</li>
                                        <li>Quantité commandé: {{ $value['quantity'] }}</li>
                                <li>Total pour ce produit:{{$value['total']}}</li>
                            @endforeach
                        <li>Total Commande: {{$total}}</li>
                    </ul>
                </div>
                <button  type="submit" class="btn btn-dark btn-outline-light">Passer la commande</button>
            </div>
        </div>
    </div>
@stop

