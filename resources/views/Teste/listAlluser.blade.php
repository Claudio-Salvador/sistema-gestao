<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table>
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Acçao</td>
    </tr>
    @foreach ($Users as $user)   
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        
      
    </tr>
    @endforeach
</table>

</body>
</html>