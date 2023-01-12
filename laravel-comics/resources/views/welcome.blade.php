@extends('layouts.app')

@section('main-content')
<div class="container d-flex flex-wrap py-4 text-white">   
        @foreach ($comics as $elem)
        <div class="cards">
            <div>
                <img src="{{$elem['thumb']}}" alt="">
            </div>
            <div>
                <h5>{{$elem['title']}}</h5>
            </div>
        </div>
        @endforeach   
</div>

<div class="contbut py-3">
    <button>LOAD MORE</button>
</div>
            
@endsection
