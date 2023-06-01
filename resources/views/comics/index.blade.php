
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2 class="text-center mt-4">DC COMICS LIST</h2>
            <div class="my-2 mt-4 text-center    ">
                <a href="{{ route('home') }}" class="btn btn-primary">Homepage</a>   
                <a class="btn btn-success" href="{{ route('comics.create') }}">Create new</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Series</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            {{-- <td scope="row">{{ $comic->id }}</td> --}}
                            <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-thumbnail"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>
                                <a class="btn btn-success mt-2" href="{{ route('comics.show', $comic->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-warning mt-2" href="{{ route('comics.edit', $comic->id) }}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type= "submit" class="btn btn-danger mt-2" onclick="return confirmDelete()">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>     --}}


                                <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-delete"  data-comic-title='{{ $comic->title }}'>
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>






                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @include('partials.modal_delete')
        </div>

        {{-- <script>
            function confirmDelete() {
                let result = confirm('Are you sure you want to delete this comic?');
                if (result) {
                    return true; 
                } else {
                    return false; 
                }
            }
        </script> --}}
        

    @endsection

  
