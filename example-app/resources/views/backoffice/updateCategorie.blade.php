@extends('layout')

@section('content')

    <form method="post" action="{{route('indexcategorie.update',[$categorie])}}">
        @method('PUT')
        @csrf
        <ul><label>
                <li> <input type="text" name="name" value="{{$categorie->name}}"></li>
                <li> <input type="text" name="description"  value="{{$categorie->description}}" ></li>
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Update Categorie</button>
    </form>

@stop
