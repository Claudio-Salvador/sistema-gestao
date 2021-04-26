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
<h1>LISTAR USUÁRIO</h1>
    <table>
        <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>ACTION</td>
    </tr>

    @foreach ($Users as $user)   
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{route('user.show',['user' => $user->id])  }}">Ver Dados</a>
            <form action="{{route('user.destroy',['user'=>$user->id ])}}" method="post">
                @csrf
                @method('delete') 
                <input type="submit" value="Remover">    
            </form>     
        </td> 
    </tr>
    @endforeach
</table>
</center>

</body>
</html>