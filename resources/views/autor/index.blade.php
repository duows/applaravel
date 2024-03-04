<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <h1>Listagem de autores</h1>
    <div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <tbody>
                @foreach($registros as $registro)
                    <tr> <!-- linha-->
                        <!-- colunas-->
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->apelido }}</td>
                        <td>{{ $registro->cidade }}</td>
                        <td>{{ $registro->bairro }}</td>
                        <td>{{ $registro->cep }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->telefone }}</td>
                        <td>
                            <!--rotina para exclusao, edicao e delecao-->
                            <a href="{{ url('/autor/edit', $registro->id) }}">Alteração</a>
                            <a href="{{ url('/autor/destroy', $registro->id) }}">Exclusão</a>
                            <a href="{{ url('/autor/show', $registro->id) }}">Consulta</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/autor/create')}}">Incluir</a>

    </div>
</body>
</html>