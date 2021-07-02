@extends('layout')

@section('content')

    <form method="post" action="{{route('indexcustomer.store')}}">
        @csrf
        <ul><label>
                <li> <input type="text" name="first_name" placeholder="prénom"></li>
                <li> <input type="text" name="last_name"  placeholder="Nom" ></li>
                <li> <input type="text" name="email"  placeholder="email"></li>
                <li> <input type="text" name="address" placeholder="adresse"></li>
                <li><input type="number" name="postcode" placeholder="code postal" ></li>
                <li><input type="text" name="city" placeholder="city" ></li>
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Create customer</button>
    </form>

@stop
