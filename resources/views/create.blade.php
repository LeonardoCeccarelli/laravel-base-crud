@extends('layouts.default_layout')

@section('page_title', 'Aggiungi Fumetto')
    
@section('header_content')
<h1 class="text-center my-3 mb-5">Aggiungi Fumetto</h1>
@endsection

@section('main_content')

<div class="container">

    @if($errors->any())
    <div class="alert alert-danger">
        Ci sono errori nel form:
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post" class="d-flex align-items-center flex-column">
        @csrf

        <div class="mb-4 w-75">
            <label for="field_title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="field_title">
        </div>

        <div class="mb-4 w-75">
            <label for="field_description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="field_description">
        </div>

        <div class="mb-4 w-75">
            <label for="field_thumb" class="form-label">Link Immagine</label>
            <input type="text" class="form-control" name="thumb" id="field_thumb">
        </div>

        <div class="mb-4 w-75 d-flex">
            <div class="w-50">
                <label for="field_price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price" id="field_price" placeholder="€">
            </div>

            <div class="w-50 ps-2">
                <label for="field_sale_date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control" name="sale_date" id="field_sale_date">
            </div>
        </div>

        <div class="mb-4 w-75 d-flex">
            <div class="w-50">
                <label for="field_series" class="form-label">Numero Serie</label>
                <input type="text" class="form-control" name="series" id="field_series">
            </div>

            <div class="w-50 ps-2">
                <label for="field_type" class="form-label">Genere</label>
                <input type="text" class="form-control" name="type" id="field_type">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </div>

    </form>
</div>
@endsection