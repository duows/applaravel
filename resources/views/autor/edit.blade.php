@extends('layouts.app')
@section('content')
    <div>
        <x-local-sistema
        titulo="Alteração"
        descricao="Alterar registro!"
        url="autor.index"
        nomeurl="Listagem de autores"
        />

            
        <div class='tile'>
            <div clase='tile-body'>
                <form action="{{ route('autor.update', $registro->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('autor.__form')
                    <button class="btn btn-primary btn-lg" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection