<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Professor</title>
</head>
<body>
    <a href="{{route('profs.index')}}">Voltar</a>
    <br>
    <label>ID: </label>{{$dados['id']}}
    <br>
    <label>Nome: </label>{{$dados['nome']}}
    <br>
    <label>E-mail: </label>{{$dados['email']}}
    <br>
    <label>Siape: </label>{{$dados['siape']}}
</body>
</html>