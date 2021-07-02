@extends('layout')

@section('content')
    <h1>Catalogue des clients</h1>
    <div class="container">

        <a href="{{route('indexcustomer.create')}}"  class="btn btn-dark btn-outline-light">Create Customer</a>

        <div class="row">
            @foreach($listeCustomer as $customer)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div><a href="{{route('indexcustomer.show', [$customer])}}">
                                <h2 class="card-title">{{$customer->first_name}} {{$customer->last_name}}</h2>
                            </a></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Id: {{$customer->id }}</li>
                            <li class="list-group-item">email:{{$customer->email}}</li>
                            <li class="list-group-item">adresse:{{$customer->address}}</li>
                            <li class="list-group-item">code postal:{{$customer->postcode}}</li>
                            <li class="list-group-item">Ville:{{$customer->city}}</li>
                        </ul>


                    </div>
                </div>

            @endforeach
        </div>
    </div>


@stop
