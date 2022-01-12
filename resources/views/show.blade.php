@extends('layouts.default_layout')

@section('page_title', "dettagli fumetto")
    
@section('main_content')
    <h1>Descrizione fumetto</h1>
    <h2>{{ $comic->title }}</h2>
@endsection