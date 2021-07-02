@extends('layout')

@section('content')

    <form method="post" action="{{route('indexorder.store')}}">
        @csrf
        <ul><label>
                <li> <input type="text" name="number" placeholder="number"></li>
                <li> <input type="number" name="customer_id"  placeholder="customer_id"></li>
                <input type="hidden" name="date" value="{{date('Y-m-d')}}">
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Create order</button>
    </form>

@stop
