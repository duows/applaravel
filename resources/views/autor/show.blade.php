@extends('layouts.app')
@section('content')
    <div>
        <x-local-sistema
        titulo="Consulta"
        descricao="Consultar registro!"
        url="autor.index"
        nomeurl="Listagem de autores"
        />

        <form>
            @include('autor.__form')
            <a href="{{ route('autor.index') }}">Cancelar</a>
        </form>
    </div>
@endsection