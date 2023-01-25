@extends('layouts.admin')


@section('content')
    <div class="container text-white h-100 d-flex justify-center align-items-center">
        <div class="main-wrap">
            <h1>{{ $museum->name }}</h1>
            <p>{{ $museum->address }}, {{ $museum->nation }}</p>

            <h2>Artisti in mostra</h2>
            <ul>
                @forelse ($museum->artists as $artist)
                    <li>
                        <a href="{{route('admin.artist.show', $artist)}}">{{ $artist->name }}</a>
                    </li>
                @empty
                    <p>Nessun artista trovato</p>
                @endforelse

            </ul>
        </div>

    </div>
@endsection
