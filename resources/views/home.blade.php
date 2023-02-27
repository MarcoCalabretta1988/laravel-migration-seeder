@extends('layouts.main')

@section('title','Home')

@section ('content')

<div class="container py-5">
   <section id="train-board">

       <table class="table">
           <thead>
               <tr>
                   <th scope="col">Compagnia</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">Codice</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">Ritardo</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )
        <tr>
            <th scope="col"> {{$train->company }}</th>
            <th scope="col">{{$train->departed_station}}</th>
            <th scope="col">{{$train->arrival_station}}</th>
            <th scope="col">{{$train->departure_time}}</th>
            <th scope="col">{{$train->arrival_time}}</th>
            <th scope="col">{{$train->code}}</th>
            <th scope="col">{{$train->n_carriages}}</th>
            <th scope="col">{{$train->in_time ? 'In orario' : 'In ritardo'}}</th>
            <th scope="col">{{$train->delete ? 'Cancellato' : 'In viaggio'}}</th>      
        </tr>
        @endforeach
    </tbody>
</table>
</section>
</div>
@endsection
    
