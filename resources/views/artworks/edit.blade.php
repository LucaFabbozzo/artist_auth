@extends('layouts.admin')

@section('content')
    <div class="container text-white">
        <form action="{{ route('admin.artwork.update', $artwork) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text"   class="form-control" id="name" name="name"
                    value="{{ old('name', $artwork->name) }}" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text"   class="form-control" id="year" name="year"
                    value="{{ old('year', $artwork->year) }}" placeholder="Year">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control"  id="description" name="description" cols="30" rows="3">{{ old('description',$artwork->description) }}</textarea>

            </div>

            <button type="submit" class="btn btn-success">Invia</button>


        </form>

        @endsection
