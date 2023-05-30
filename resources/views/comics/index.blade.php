
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2 class="text-center">COMICS LIST</h2>
            <div class="my-2 text-end">
                <a href="{{ route('comics.create') }}">CREATE NEW</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>
                                <a class="btn btn-success d-inline-block" href="{{ route('comics.show', $comic->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-warning d-inline-block" href="{{ route('comics.edit', $comic->id) }}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type= "submit" class="btn btn-danger" onclick="confirmDelete()">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>    


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this comic?');
            }
        </script>

    @endsection


