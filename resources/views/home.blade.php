@extends('layouts.app')

@section('content')
    <div class="container text-center mt-4 homepage">
        <h1 text>HOMEPAGE DC COMICS</h1>
        <a href="{{ route('comics.index') }}">GO TO COMICS</a>
    </div>
@endsection
