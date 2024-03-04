@extends('layouts.app')

@section('content')
    <h1>Delete Autor</h1>
    <p>Are you sure you want to delete this autor?</p>
    <form action="{{ route('autor.destroy', $autor->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
