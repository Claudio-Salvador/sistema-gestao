<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <center>
        <h1>Cadastrar novo Usuário</h1>
        <form action="{{route('user.update',['user'=>$user->id])}}" method="post">
            @csrf
            @method('PUT')
            <label for="">Nome:</label>
            <input type="text" name="name" value="{{$user->name}}" required> <br>
            <label for="">Email:</label>
            <input type="Email" name="email" value="{{$user->email}}" required> <br>
            <label for="">Senha:</label>
            <input type="password" name="password" value="" required> <br>
            <input type="submit" value="Editar" style="width: 180px; height:40px;"> 
        </form>

    </center>
    
</body>
</html>