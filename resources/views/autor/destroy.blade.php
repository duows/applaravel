@extends('layouts.app')
@section('content')
    <div>
        <x-local-sistema
        titulo="Excluir"
        descricao="Excluir registro!"
        url="autor.index"
        nomeurl="Listagem de autores"
        />
        <div class="container">
            @include('layouts.alerts')
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <form action="{{ route('autor.destroy', $registro->id) }}" method="POST">
                        @csrf    
                        @method('DELETE')
                        @include('autor.__form')   
                        <button type="submit">Deletar Registro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection