@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5">
    <h1>Novo  Funcionário</h1>
    
    <br>
    <form  action="{{route('sistema.funcionario.cadastrar')}}" method="POST">
        @csrf

        <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputEmail4"> Funcionário</label>
            <input type="text" class="form-control" name="funcionarioNome" id="inputEmail4" placeholder="Nome da funcionario" required>
        </div>
        
         <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control"  name="funcionarioEmail" id="inputPassword4" placeholder="Email da funcionario" required>
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
            <input type="number" class="form-control" name="funcionarioTelefone" id="inputAddress" placeholder="Telefone da funcionario" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">naturalidade</label>
            <input type="text" class="form-control" name="funcionarioNaturalidade" id="inputAddress2" placeholder="Naturalidade do funcionário" required>
        </div>
       
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div> 
@endsection