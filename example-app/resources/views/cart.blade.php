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
                                <li>{{ $value['produit']->name }}</li>
                                        <li>{{ $value['quantity'] }}</li>
                                <li>Total Commande:{{$value['quantity']*$value['produit']->price}}</li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

