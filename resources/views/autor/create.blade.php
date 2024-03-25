@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('autor.store') }}" method="POST">
        @csrf    
        @include('autor.__form')
            <button type="submit">Salvar Registro</button>
        </form>
    </div>
@endsection