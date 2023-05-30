@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Titolo del Fumetto {{ $comic->title }}</h2>
        <img class="w-20" src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">
            
            <li class="list-group-item">
                <strong>Serie: </strong> {{ $comic->series }}
            </li>
            
        </ul>
        <p>
            {{ $comic->description }}
        </p>
        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-4">TURN BACK</a>
    </div>
    
@endsection