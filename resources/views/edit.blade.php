@extends('layouts.default_layout')

@section('page_title', 'Modifica - ' . $comic->title)
    
@section('header_content')
<h1 class="text-center my-3 mb-5">Modifica Fumetto</h1>
@endsection

@section('main_content')

<div class="container">
    <small class="d-block mb-5"><a href="{{ route("comics.index") }}"><- Ritorna a Lista Fumetti</a></small>

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

    <form action="{{ route('comics.update', $comic->id) }}" method="post" class="d-flex align-items-center flex-column mb-5">
        @csrf

        @method("put")

        <div class="mb-4 w-75">
            <label for="field_title" class="form-label">Titolo</label>
            <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" 
             name="title" id="field_title"
             value="{{ old("title") ?? $comic->title  }}">

            @if($errors->has("title"))
            <div class="invalid-feedback">
                {{ $errors->get("title")[0]}}
            </div>
            @endif
        </div>

        <div class="mb-4 w-75">
            <label for="field_description" class="form-label">Descrizione</label>
            <input type="text" class="form-control {{ $errors->has("description") ? 'is-invalid' : '' }}" 
             name="description" id="field_description"
             value="{{ old("description") ?? $comic->description }}">

            @if($errors->has("description"))
            <div class="invalid-feedback">
                {{ $errors->get("description")[0]}}
            </div>
            @endif
        </div>

        <div class="mb-4 w-75">
            <label for="field_thumb" class="form-label">Link Immagine</label>
            <input type="text" class="form-control {{ $errors->has("thumb") ? 'is-invalid' : '' }}" 
             name="thumb" id="field_thumb"
             value="{{ old("thumb") ?? $comic->thumb }}">

            @if($errors->has("thumb"))
            <div class="invalid-feedback">
                {{ $errors->get("thumb")[0]}}
            </div>
            @endif
        </div>

        <div class="mb-4 w-75 d-flex">
            <div class="w-50">
                <label for="field_price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" 
                 name="price" id="field_price" placeholder="€"
                 value="{{ old("price") ?? $comic->price }}">

                @if($errors->has("price"))
                <div class="invalid-feedback">
                    {{ $errors->get("price")[0]}}
                </div>
                @endif
            </div>

            <div class="w-50 ps-2">
                <label for="field_sale_date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control {{ $errors->has("sale_date") ? 'is-invalid' : '' }}" 
                 name="sale_date" id="field_sale_date"
                 value="{{ old("sale_date") ?? $comic->sale_date }}">

                @if($errors->has("sale_date"))
                <div class="invalid-feedback">
                    {{ $errors->get("sale_date")[0]}}
                </div>
                @endif
            </div>
        </div>

        <div class="mb-4 w-75 d-flex">
            <div class="w-50">
                <label for="field_series" class="form-label">Numero Serie</label>
                <input type="text" class="form-control {{ $errors->has("series") ? 'is-invalid' : '' }}" 
                 name="series" id="field_series"
                 value="{{ old("series") ?? $comic->series }}">

                @if($errors->has("series"))
                <div class="invalid-feedback">
                    {{ $errors->get("series")[0]}}
                </div>
                @endif
            </div>

            <div class="w-50 ps-2">
                <label for="field_type" class="form-label">Genere</label>
                <input type="text" class="form-control {{ $errors->has("type") ? 'is-invalid' : '' }}" 
                 name="type" id="field_type"
                 value="{{ old("type") ?? $comic->type }}">

                @if($errors->has("type"))
                <div class="invalid-feedback">
                    {{ $errors->get("type")[0]}}
                </div>
                @endif
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>

    </form>
</div>
@endsection