@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5">
    <br>
    <h1>Editar   Empresa</h1>
    
    <br>
    <form  action="{{route('sistema.empresactualizar',['empresa'=>$empresa->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Empresa</label>
            <input type="text" class="form-control" name="empresaNome" id="inputEmail4" value="{{$empresa->nome_empresa}}" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Email</label>
            <input type="email" class="form-control"  name="empresaEmail" id="inputPassword4" value="{{$empresa->email}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Telefone</label>
            <input type="number" class="form-control" name="empresaTelefone" id="inputAddress" value="{{$empresa->telefone}}" required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Website</label>
            <input type="text" class="form-control" name="empresaWebsite" id="inputAddress2" value="{{$empresa->site}}"" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
            <label for="inputCity">Descrição</label>
            <input type="text" class="form-control" name="empresaDescricao" id="inputCity" value="{{$empresa->descricao}}" required>
            </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
</div> 
@endsection