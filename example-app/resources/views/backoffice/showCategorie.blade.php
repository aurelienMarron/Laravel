@extends('layout')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div><h2 class="card-title">{{$categorie->name}}</h2></div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$categorie->id }}</li>
                        <li class="list-group-item">Description:{{$categorie->description}}</li>
                       <div> <ul><h4 class="card-title">Produit de la catégorie</h4>
                               @foreach($categorie->products as $product)
                               <li class="list-group-item"> {{$product->name}}</li>
                               @endforeach
                           </ul></div>
                    </ul>


                </div>
            </div>
        </div>
            <a href="{{route('indexcategorie.edit',[$categorie])}}"  class="btn btn-dark btn-outline-light">Update Categorie</a>
        <form method="POST" action="{{route('indexcategorie.destroy',[$categorie])}}">
            @method('DELETE')
            @csrf
            <button  type="submit" class="btn btn-dark btn-outline-light">Delete categorie</button>
        </form>
    </div>

@stop
