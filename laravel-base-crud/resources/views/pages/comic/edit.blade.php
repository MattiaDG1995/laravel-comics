@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1>Pagina modificata</h1>

    <form method="POST" action="{{route('comics.update', $comic->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input value="{{$comic->title}}" name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="">value="{{$comic->description}}"</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input value="{{$comic->thumb}}" name="thumb" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">prezzo</label>
        <input value="{{$comic->price}}" name="price" type="number" class="form-control" id="title" step="0.01">
    </div>

    <div class="mb-3">
        <label class="form-label">serie</label>
        <input value="{{$comic->series}}" name="series" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">data</label>
        <input value="{{$comic->sale_date}}" name="sale_date" type="date" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input value="{{$comic->type}}" name="type" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea record</button>
</form>
@endsection