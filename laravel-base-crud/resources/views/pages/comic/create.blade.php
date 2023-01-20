@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1>Create page</h1>

    <form method="POST" action="{{route('comics.store')}}">

    @csrf

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id=""></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input name="thumb" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">prezzo</label>
        <input name="price" type="number" class="form-control" id="title" step="0.01">
    </div>

    <div class="mb-3">
        <label class="form-label">serie</label>
        <input name="series" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">data</label>
        <input name="sale_date" type="date" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input name="type" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea record</button>
</form>
@endsection