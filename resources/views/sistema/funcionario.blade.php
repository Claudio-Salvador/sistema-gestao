@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5 my-5">

    <h1>Listagem de Funcionários </h1>
     <br>
   
    <a  href="{{route('sistema.funcionarioNovo')}}" class="btn btn-success w-100">+Novo Funcionário</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">naturalidade</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
               
            @foreach ($funcionarios as $funcionário)     
            <tr>
                <th scope="row">{{$funcionário->id}}</th>
                <td>{{$funcionário->empresa_id}}</td>
                <td>{{$funcionário->nome}}</td>
                <td>+244 {{$funcionário->telefone}}</td>
                <td>{{$funcionário->email}}</td>
                <td>{{$funcionário->naturalidade}}</td>
              

                <td>
                    <a href="{{route('sistema.funcionarioaDetalhe',['funcionario'=>$funcionário->id])}}" c lass="btn btn-info lg-2 ">Ver</a>
                </td>
                <td>
                    <a href="{{route('sistema.funcionarioEdit',['funcionario'=>$funcionário->id])}}" class="btn btn-success lg-2 ">Editar</a> 
                </td>
                <td>
                    <form action="{{route('sistema.funcionarioDelectar',['funcionario'=>$funcionário->id])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
                
                </tr>
                
                @endforeach
            </tbody>
        </table>
</div> 
@endsection