@extends('layout')

@section('content')

    <form method="post" action="{{route('indexorder.update',[$order])}}">
        @method('PUT')
        @csrf
        <ul><label>
                <li> <input type="text" name="number" value="{{$order->number}}"></li>
                <li> <input type="number" name="customer_id"  value="{{$order->customer_id}}"></li>
                <input type="hidden" name="date" value="{{$order->date}}">
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Update Order</button>
    </form>

@stop
