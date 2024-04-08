@extends('layouts.app')
@section('content')
<div>
    <x-local-sistema
    titulo="Inclusão"
    descricao="Cadastrar novo registro!"
    url="autor.index"
    nomeurl="Listagem de autores"
    />
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class='tile'>
                    <div clase='tile-body'>
                        <form action="{{ route('autor.store') }}" method="POST">
                            @csrf
                            @include('autor.__form')
                            <button type="submit" class="btn btn-secondary">Salvar Registro</button>
                        </form>
                    </div>
                <div>
            </div>
        </div>
    </div>
</div>
@endsection