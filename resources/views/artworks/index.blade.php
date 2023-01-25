@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Artist</th>
                            <th scope="col">Museum</th>
                            <th scope="col">Name</th>
                            <th scope="col">Year</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($all_artworks as $artwork)
                            <tr class="text-white">
                                <td class="text-white">{{ $artwork->id }}</td>
                                <td class="text-white">{{ $artwork->artist->name }}</td>
                                <td class="text-white">{{ $artwork->museum->name }}</td>
                                <td class="text-white">{{ $artwork->name }}</td>
                                <td class="text-white">{{ $artwork->year }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('admin.artwork.show', $artwork)}}">Vai</a>
                                    <a class="btn btn-warning" href="{{route('admin.artwork.edit',$artwork)}}">Edita</a>
                                    <form action="" method="POST" class="d-inline"
                                        onsubmit="return confirm('Confermi l\'eliminazione di: {{ $artwork->name }}?')"
                                        class="d-inline" action="" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
