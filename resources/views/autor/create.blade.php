@extends('layouts.app')
@section('content')
<div>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Cadastro</h1>
            <p>Cadastro de novos autores!</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>

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