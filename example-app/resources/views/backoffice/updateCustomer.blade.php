@extends('layout')

@section('content')

    <form method="post" action="{{route('indexcustomer.update',[$customer])}}">
        @method('PUT')
        @csrf
        <ul><label>
                <li> <input type="text" name="first_name" value="{{$customer->first_name}}"></li>
                <li> <input type="text" name="last_name"  value="{{$customer->last_name}}" ></li>
                <li> <input type="text" name="email" value="{{$customer->email}}"></li>
                <li> <input type="text" name="address" value="{{$customer->address}}"></li>
                <li><input type="number" name="postcode" value="{{$customer->postcode}}"></li>
                <li><input type="text" name="city" value="{{$customer->city}}" ></li>
            </label> </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Update Customer</button>
    </form>

@stop
