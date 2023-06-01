@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2 class="mt-4">Comics Title: <br> {{ $comic->title }}</h2>
        <img class="w-20 mt-4" src="{{ $comic->thumb }}" alt="">
        <ul class="list-group">

            <li class="m-4  ">
                <strong>Series: {{ $comic->series }}</strong>
            </li>

        </ul>
        <p>
            {{ $comic->description }}
        </p>

        <div class="d-flex justify-content-center">
            <a class="btn btn-warning m-2" href="{{ route('comics.edit', $comic->id) }}">
                Modify
            </a>

            {{-- Delete popup --}}
            {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger m-2" onclick="return confirmDelete()">
                    Delete
                </button>
            </form> --}}


            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-delete mt-2" data-comic-title='{{ $comic->title }}'>
                    Delete
                </button>
            </form>


            <a href="{{ route('comics.index') }}" class="btn btn-primary m-2  ">Turn Back</a>

        </div>
        @include('partials.modal_delete')

    </div>
    
    {{-- Script for delete popup --}}
    {{-- <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this comic?');
        }
    </script> --}}
@endsection
