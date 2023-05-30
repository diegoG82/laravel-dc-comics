@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">EDIT COMIC</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price </label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>


            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" id="type" name="type">
                    <option value="Comic" {{ $comic->type === 'Comic' ? 'selected' : '' }}>Comic</option>
                    <option value="Graphic Novel" {{ $comic->type === 'Graphic Novel' ? 'selected' : '' }}>Graphic Novel
                    </option>
                </select>
            </div>



            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">

            </div>

            <div class="d-flex">


                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger m-2" onclick="confirmDelete()">
                        Delete</i>
                    </button>
                </form>

                <div>
                    <button type="submit" class="btn btn-warning m-2 ">Update</button>
                </div>

                <a href="{{ route('comics.index') }}" class="btn btn-primary m-2  ">Turn Back</a>

            
            </div>






    </div>
@endsection
