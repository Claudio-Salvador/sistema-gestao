@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5 my-5">
    <center>

        <h1>Detalhe do Funcionário</h1>
    </center>
    <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Responsive image">
    <br>
    <h4>Nome:{{$funcionario->nome}}</h4>
    <h4>Email:{{$funcionario->email}}</h4>
    <h4>Telefone:{{$funcionario->telefone}}</h4>
    <h4>Natural:{{$funcionario->naturalidade}}</h4>
    <br>
    <h4>Website: <a href="{{$empresa->site}}" target="_blank">{{$empresa->site}}</a></h2>
        <p>Criado:{{$funcionario->created_at}}</p>
        
        <center>
            <h1>Empresa onde trabalha</h1>
        </center>
    
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">descrição</th>
                <th scope="col">Website</th>

                </tr>
            </thead>
            <tbody>
               
           
            <tr>
                <th scope="row">{{$funcionario->id}}</th>
                <td> {{$empresa->nome_empresa}}</td>
                <td>+244{{$empresa->telefone}}</td>
                <td> {{$empresa->email}} </td>
                <td>{{$empresa->descricao}}</td>
                <td>{{$empresa->site}}</td>
                </tr>

            </tbody>
        </table>
</div> 
@endsection