@extends('layouts.default_layout')

@section('page_title', "Dettagli - " . $comic->title)

@section('header_content')
    <h1 class="text-center my-4 text-info">{{ $comic->title }}</h1>
@endsection
    
@section('main_content')
    <div class="container">
        <small class="d-block mb-5"><a href="{{ route("comics.index") }}"><- Ritorna a Lista Fumetti</a></small>

        <h2 class="mb-4">Titolo: {{ $comic->title }}</h2>
        <p class="mb-4">{{ $comic->description }}</p>
        <h3 class="mb-4">Prezzo: € {{ $comic->price }}</h3>
        <h5 class="mb-3">Data di uscita: {{ $comic->sale_date }}</h5>

        @if ($comic->series)
        <h6 class="mb-3">Serie: {{ $comic->series }}</h6>
        @endif

        @if ($comic->type)
        <h6 class="mb-3">Genere: {{ $comic->type }}</h6>
        @endif

        <div class="d-flex my-4">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-success me-1">Change</a>
            @include("partials.form_btn_delete", ["comic" => $comic])
        </div>
    </div>
@endsection