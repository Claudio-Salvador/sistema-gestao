<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center py-4 bg-dark text-white">ENTRAR NO SISTEMA</h1>
    <div class="container py-5 my-8 ">
        
        @if ($errors->all())
        @foreach ($errors->all() as $erro)
            <div class="alert alert-danger" role="alert">
                {{$erro}}
            </div>
        @endforeach
        @endif
        <form action="{{route('logar')}}" class="form-signin" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="">Email de Usuário</label>
                    <input type="Email" class="form-control" value="claudiosalvador1997@gmail.com" required placeholder="Digite Email usuário" name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Senha d Usuário</label>
                    <input type="password" class="form-control" required placeholder="Digite sua senha" name="senha">
                </div>
                <div class="form-group col-md-12">
                    
                    <input type="SUBMIT" class="btn btn-success lg-8 btn-block" value="Iniciar sessão">
                </div>
            </div>

        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>