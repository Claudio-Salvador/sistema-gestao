@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5">
    <h1>Nova  Empresa</h1>
    
    <br>
    <form  action="{{route('sistema.empresa.cadastrar')}}" method="POST">
        @csrf

        <div class="form-row">

            <div class="form-group col-md-6">
            <label for="inputEmail4">Empresa</label>
            <input type="text" class="form-control" name="empresaNome" id="inputEmail4" placeholder="Nome da empresa" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control"  name="empresaEmail" id="inputPassword4" placeholder="Email da Empresa" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Telefone</label>
            <input type="number" class="form-control" name="empresaTelefone" id="inputAddress" placeholder="Telefone da empresa" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Website</label>
            <input type="url" class="form-control" name="empresaWebsite" id="inputAddress2" placeholder="Web site da empresa" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputCity">Descrição</label>
            <input type="text" class="form-control" name="empresaDescricao" id="inputCity" required>
            </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div> 
@endsection