@extends('layouts.app')
@section('content')
    <div>
        <x-local-sistema
        titulo="Excluir"
        descricao="Excluir registro!"
        url="autor.index"
        nomeurl="Listagem de autores"
        />

        <form action="{{ route('autor.destroy', $registro->id) }}" method="POST">
            @csrf    
            @method('DELETE')
            @include('autor.__form')   
            <button type="submit">Deletar Registro</button>
        </form>
    </div>
@endsection