@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Nom: {{$customer->first_name}} {{$customer->first_name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$customer->id }}</li>
                        <li class="list-group-item">email:{{$customer->email}}</li>
                        <li class="list-group-item">adresse:{{$customer->address}}</li>
                        <li class="list-group-item">code postal:{{$customer->postcode}}</li>
                        <li class="list-group-item">Ville:{{$customer->city}}</li>
                    </ul></div>
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title">Commande(s) passée(s):</h5>
                    <ul class="list-group list-group-flush">
                        @foreach($customer->orders as $order)
                            <li class="list-group-item">{{$order->number}}</li>
                        @endforeach
                    </ul></div>
            </div>
        </div>
    </div>
    <a href="{{route('indexcustomer.edit',[$customer])}}"  class="btn btn-dark btn-outline-light">Update customer</a>
    <form method="POST" action="{{route('indexcustomer.destroy',[$customer])}}">
        @method('DELETE')
        @csrf
        <button  type="submit" class="btn btn-dark btn-outline-light">Delete customer</button>
    </form>
    </div>
@stop
