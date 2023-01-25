@extends('layouts.admin')

@section('content')
    <div class="container text-white">
        <h1>siamo nella show</h1>
        <h1>{{$artwork->name}}</h1>
        <p>{{$artwork->year}}</p>
        <p>{{$artwork->description}}</p>

        <a class="btn btn-primary" href="{{route('admin.artist.show',$artwork)}}">Go to Artist</a>





    </div>


@endsection
