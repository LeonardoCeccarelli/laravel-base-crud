@extends('layouts.default_layout')

@section('page_title', "Lista Comics")

@section("header_content")

<h1 class="text-center text-primary my-4">Lista Comics</h1>

@endsection

@section('main_content')
    
<div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-link mb-5">Aggiungi +</a>
    <div class="row row-cols-4 g-3">
        @foreach ($data as $item)
            <div class="col">
                <div class="card">
                    <img src={{ $item->thumb ? $item->thumb : "https://www.frosinonecalcio.com/wp-content/uploads/2021/09/default-placeholder.png" }} 
                         class="card-img-top" alt="comic_image">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->title }}</h5>
                      <h6>€ {{ $item->price }}</h6>
                      <p class="card-text">{{ $item->description }}</p>
                      <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection