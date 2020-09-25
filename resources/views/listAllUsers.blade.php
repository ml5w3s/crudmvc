<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <title>Listagem de Usuários</title>
</head>
<body>
<table>
    <tr>
        <th>#ID</th>
        <th>Nome:</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><a href="http://ml5-debian/ml5/public/usuarios/{{$user->id}}">Ver Usuário</a>
            <form action="{{route('users.destroy',['user'=>$user->id])}}" method="post">
            @csrf
            @method('delete')
                <input type="hidden" name="user" value="{{$user->id}}">
                <input type="submit" value="Remover">
            </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
