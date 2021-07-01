@extends('layout')

@section('content')
    <h1>Catalogue des categories</h1>
    <div class="container">

        <a href="{{route('indexcategorie.create')}}"  class="btn btn-dark btn-outline-light">Create Categorie</a>

        <div class="row">
            @foreach($listeCategories as $categorie)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div><a href="{{route('indexcategorie.show', [$categorie])}}">
                                <h2 class="card-title">{{$categorie->name}}</h2>
                            </a></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Id: {{$categorie->id }}</li>
                            <li class="list-group-item">Description:{{$categorie->description}}</li>
                        </ul>


                    </div>
                </div>

            @endforeach
        </div>
    </div>


@stop
