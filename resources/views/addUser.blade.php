<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name-"viewport" content="width-device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible content="ie=edge">
    <title>Cadastro de usuário</title>
</head>
<body>
<form action="{{route('users.store')}}" method="post">
    @csrf
    <lable for="">Nome do usuário: </label>
    <input type="text" name="name">

    <lable for="">E-mail do usuário: </label>
    <input type="email" name="email">

    <lable for="">Senha do usuário: </label>
    <input type="password" name="password">

    <input type="submit" value="Cadastrar usuário">
</form>
</body>
</html> 
