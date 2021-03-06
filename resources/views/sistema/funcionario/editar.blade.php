@extends('sistema.master.corpo')
@section('conteudo')
    <div class="container py-5">
        <br>
        <h1>Editar funcionario</h1>
          <form  action="{{route('sistema.funcionarioctualizar',['funcionario'=>$funcionario->id])}}" method="POST">
        @csrf
        @method('put')

        <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputEmail4"> Funcionário</label>
            <input type="text" class="form-control" name="funcionarioNome" id="inputEmail4" value="{{$funcionario->nome}}" required>
        </div>
        
         <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control"  name="funcionarioEmail" id="inputPassword4" value="{{$funcionario->email}}" required>
        </div>
         <div class="form-group col-md-12">
            <label for="inputPassword4">Seleciona a Emprea</label>
            <select name="funcionarioIduser" required class="form-control">
                @foreach ($empresas as $empresa) 
                <option value="{{ $empresa->id}}">{{ $empresa->nome_empresa}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Telefone</label>
            <input type="number" class="form-control" name="funcionarioTelefone" id="inputAddress" value="{{$funcionario->telefone}}" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">naturalidade</label>
            <input type="text" class="form-control" name="funcionarioNaturalidade" id="inputAddress2" value="{{$funcionario->naturalidade}}" required>
        </div>
       
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
        
    </div>
  
@endsection