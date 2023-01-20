@extends('layouts.app')

@section('page-title', 'Welcome')

@section('main-content')
    <h1>Lista Comics</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif


    <div>
        <a href="{{route('comics.create')}}">Create Comics</a>
    </div>
   
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>
                    <a href="{{route('comics.show', $elem->id)}}">
                        {{$elem->title}}
                    </a>
                </td>               
                <td>{!!$elem->description!!}</td>
                <td>
                    <img src="{{$elem->thumb}}" alt="">
                </td>
                <td>{{$elem->price}}</td>
                <td>{{$elem->series}}</td>
                <td>{{$elem->sale_date}}</td>
                <td>{{$elem->type}}</td>  
                <td>
                    <form action="{{route('comics.destroy',$elem->id)}}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>
                    <div>
                        <a href="{{route('comics.edit', $elem->id)}}">
                            <i class="fa-solid fa-pen ms-3"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

{{$comics->links()}}

@endsection