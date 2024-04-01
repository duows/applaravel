@extends('layouts.app')
@section('content')
    <div>
        <div class="app-title">
            <div>
                <h1><i class="bi bi-speedometer"></i> Alteração</h1>
                <p>Alterar registros autores!</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>

            
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