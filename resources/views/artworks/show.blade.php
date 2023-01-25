@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>siamo nella show</h1>
        <h1>{{$artwork->name}}</h1>
        <p>{{$artwork->year}}</p>
        <p>{{$artwork->description}}</p>




    </div>

@endsection
