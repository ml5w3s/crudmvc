<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width-device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Usuáio</title>
</head>
<body>
<h1>{{$user->name}}</h1>
<p>{{$user->email}} </p>
<p>{{date('d/m/Y H:i',strtotime($user->created_at))}}</p>
</body>
</html>
