<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo </title>
</head>
<body>

    <center>
        <h1>Cadastrar novo Usuário</h1>
        <form action="{{route('user.store')}}" method="post">
            @csrf
            
            <label for="">Nome:</label>
            <input type="text" name="name" id="" required> <br>
            <label for="">Email:</label>
            <input type="Email" name="email" id="" required> <br>
            <label for="">Senha:</label>
            <input type="password" name="password" id="" required> <br>
            <input type="submit" value="Guardar" style="width: 180px; height:80px;"> 




        </form>

    </center>
    
</body>
</html>