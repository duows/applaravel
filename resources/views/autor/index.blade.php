@extends('layouts.app')
@section('content')
    <x-local-sistema
    titulo="Listagem"
    descricao="Listar registros!"
    url="dashboard"
    nomeurl="Dashboard"
    />

    <div class="container">
        @include('layouts.alerts')
        <div class='tile'>
            <div clase='tile-body'>

            <form class="row g-3 align-items-center">
                @csrf
                <div class="col-6">
                    <div class="input-group">
                    <!-- <div class="input-group-text">@</div> -->
                    <input type="text" name="pesquisar"
                    class="form-control" id="pesquisar" 
                    placeholder="Pesquisa"
                    value="{{ isset($filter['pesquisar']) ? isset($filter['pesquisar']) : '' }}">
                    </div>
                </div>

                <div class="col-2">
                    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                    <select class="form-select" id="inlineFormSelectPref" name="perPage">
                    @foreach($pages as $perPage)
                        <option value="{{ $perPage }}"
                        @if($item==$perPage) selected @endif>  
                        {{ $perPage }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <br>

                <table class="table table-stripped table-bordered table-hover">
                    <tr class="cabecalho">
                        <th>Nome</th>
                        <!-- <th>Apelido</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>CEP</th> -->
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                        @foreach($registros as $registro)
                            <tr> <!-- linha-->
                                <!-- colunas-->
                                <td>{{ $registro->nome }}</td>
                                <!-- <td>{{ $registro->apelido }}</td> -->
                                <!-- <td>{{ $registro->cidade }}</td> -->
                                <!-- <td>{{ $registro->bairro }}</td> -->
                                <!-- <td>{{ $registro->cep }}</td> -->
                                <td>{{ $registro->email }}</td>
                                <td>{{ $registro->telefone }}</td>
                                <td style="text-align:center">
                                    <!--rotina para exclusao, edicao e delecao-->
                                    <a type="button" class="btn btn-secondary btn-sm" href="{{ route('autor.edit', $registro->id) }}">Alteração</a>
                                    <a type="button" class="btn btn-danger btn-sm" href="{{ route('autor.delete', $registro->id) }}">Exclusão</a>
                                    <a type="button" class="btn btn-info btn-sm" href="{{ route('autor.show', $registro->id) }}">Consulta</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination justify-content-end">
                    @if (isset($filter))
                        {{ $registros->appends([
                            'filter'=> $filter,
                            'perPage'=> $perPage
                            ])->links() }}
                    @else
                        {!! $registros->appends(['perPage'=>$perPage])->links() !!}
                    @endif
                </div>


                <a type="button" class="btn btn-primary btn-lg" href="{{ route('autor.create')}}">Incluir</a>
            </div>
        </div>
    </div>
@endsection