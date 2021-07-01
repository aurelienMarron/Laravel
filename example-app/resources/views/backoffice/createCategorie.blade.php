@extends('layout')

@section('content')

    <form method="post" action="{{route('indexcategorie.store')}}">
        @csrf
        <ul><label>
                <li> <input type="text" name="name" placeholder="name"></li>
                <li> <input type="text" name="description"  placeholder="description" ></li>
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Create Categorie</button>
    </form>

@stop
