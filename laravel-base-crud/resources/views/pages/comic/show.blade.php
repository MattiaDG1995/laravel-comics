@extends('layouts.app')

@section('page-title', 'Show')

@section('main-content')
    <h1 class="text-center">{{$singolo_elem->title}}</h1>
    <div class="d-flex justify-content-center p-5 flex-column">
        <div  class="d-flex justify-content-center">
            <img class=""src="{{$singolo_elem->thumb}}" alt="">
        </div>

        <div  class="p-5">
            <p>{!!$singolo_elem->description!!}</p>
        </div>      
    </div>
    
    

@endsection