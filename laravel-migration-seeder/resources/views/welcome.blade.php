@extends('layouts.app')

@section('main-content')
    @foreach($all_trains as $elem)
    <h2>Partenza: {{$elem['partenza']}}</h2>
    <h2>Destinazione: {{$elem['destinazione']}}</h2>
    @endforeach
@endsection