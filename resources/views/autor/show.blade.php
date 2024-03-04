<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <Label for="">Nome</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="nome"
                id="nome"
                value="{{ isset($registro->nome) ? $registro->nome : ''}}">
        </div>
    </div>
</body>
</html>