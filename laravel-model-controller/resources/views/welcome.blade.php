@extends('layouts.app')

@section('title-page', 'Movies')

@section('main-content')

@foreach ($all_movies as $elem )
        <h2>{{$elem->title}}</h2>
 @endforeach

@endsection