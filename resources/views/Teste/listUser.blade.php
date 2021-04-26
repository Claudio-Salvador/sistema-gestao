<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar usuário</title>
</head>
<body>
    <center>
        <h1>Dados do Usuário</h1>

            <h2>Nome {{$user->name}}</h2>
            <h2>EMAIL {{$user->email}}</h2>
            <h2>DATA  {{$user->created_at}}</h2>

    </center>
    
</body>
</html>