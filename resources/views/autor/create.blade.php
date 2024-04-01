@extends('layouts.app')
@section('content')
<div>
    <x-local-sistema
    titulo="Inclusão"
    descricao="Cadastrar novo registro!"
    url="autor.index"
    nomeurl="Listagem de autores"
    />
    

    <div class='tile'>
        <div clase='tile-body'>
            <form action="{{ route('autor.store') }}" method="POST">
                @csrf
                @include('autor.__form')
                <button type="submit" class="btn btn-secondary">Salvar Registro</button>
            </form>
        </div>
    </div>
</div>
@endsection