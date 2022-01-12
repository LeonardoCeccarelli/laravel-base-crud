@extends('layouts.default_layout')

@section('page_title', "Lista Comics")

@section("header_content")

<h1 class="text-center text-primary my-4">Lista Comics</h1>

@endsection

@section('main_content')
    
<div class="container">
    <div class="row row-cols-4 g-3">
        @foreach ($data as $item)
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->title }}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leggi tutto</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection