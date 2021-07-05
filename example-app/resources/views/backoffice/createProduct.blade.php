@extends('layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('indexproduct.store')}}">
        @csrf
        <ul>
                <li> <input type="text" name="name" placeholder="name"></li>
                <li> <input type="number" name="price" step="0.01" placeholder="price" min="0"></li>
                <li> <input type="number" name="weight"  placeholder="weight" min="0"></li>
                <li> <input type="text" name="picture" placeholder="image"></li>
                <li><input type="number" name="quantity" placeholder="quantity" min="0"></li>
                <li><input type="number" name="available" placeholder="available" min="0" max="1"></li>
                <li> <input type="number" name="size"  placeholder="size" min="0"></li>
                <li><select name="categorie">
                        <libelle>Choisissez la catégorie</libelle>
                @foreach($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                    </select> </li>
            </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Create product</button>
    </form>

@stop
