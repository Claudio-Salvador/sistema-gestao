@extends('sistema.master.corpo')
@section('conteudo')
<div class="container py-5">
    <h1 class="text-center ">Todas Empresas </h1>
    <br>
   
    <a  href="{{route('sistema.empresaNova')}}" class="btn btn-success w-100">Cadastrar</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
               
            @foreach ($empresas as $empresa)     
            <tr>
                <th scope="row">{{$empresa->id}}</th>
                <td>{{$empresa->nome_empresa}}</td>
                <td>+244 {{$empresa->telefone}}</td>
                <td>{{$empresa->email}}</td>
                <td>{{$empresa->descricao}}</td>
              

                <td>
                    <a href="{{route('sistema.empresaShow',['empresa'=>$empresa->id])}}" c lass="btn btn-info lg-2 ">Ver</a>
                </td>
                <td>
                    <a href="{{route('sistema.empresaEdit',['empresa'=>$empresa->id])}}" class="btn btn-success lg-2 ">Editar</a> 
                </td>
                <td>
                    <form action="{{route('sistema.empresaDeletar',['empresa'=>$empresa->id])}}" method="POST">
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