@extends('layouts.main')

@section('title','Home')

@section ('content')

<h1>HOME</h1>
@foreach ($trains as $train )
    <ul>
        <li>{{$train->company }}</li>
        <li>{{$train->departed_station}}</li>
        <li>{{$train->arrival_station}}</li>
        <li>{{$train->departure_time}}</li>
        <li>{{$train->arrival_time}}</li>
        <li>{{$train->code}}</li>
        <li>{{$train->n_carriages}}</li>
        <li>{{$train->in_time}}</li>
        <li>{{$train->delete}}</li>
    </ul>
@endforeach
@endsection
    
