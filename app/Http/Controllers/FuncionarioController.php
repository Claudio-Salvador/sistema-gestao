<?php

namespace App\Http\Controllers;

use App\empresa;
use App\funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $funcionario1 = new funcionario();
        // $trabalha = $funcionario1->empresaR();
        $funcionarios=funcionario::all();
   
       return view('sistema.funcionario',[
           'funcionarios'=> $funcionarios,
           ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas=new empresa();
        $empresas=empresa::all();
        return view('sistema.funcionario.novo',['empresas' =>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new funcionario();

        $funcionario->nome = $request->funcionarioNome;
        $funcionario->email = $request->funcionarioEmail;
        $funcionario->empresa_id = $request->funcionarioIduser;
        $funcionario->telefone = $request->funcionarioTelefone;
        $funcionario->naturalidade = $request->funcionarioNaturalidade;

        $funcionario->save();


        return redirect()->route('sistema.funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
    {
        $trabalha=$funcionario->empresaR()->first();
        return view('sistema.funcionario.ver', [
            'funcionario' => $funcionario,
            'empresa' => $trabalha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionario $funcionario)
    {
        $empresas=new empresa();
        $empresas=$empresas::all();
        
        return view('sistema.funcionario.editar', [
            'funcionario' => $funcionario,
            'empresas' =>$empresas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcionario $funcionario)
    {
      

        $funcionario->nome = $request->funcionarioNome;
        $funcionario->email = $request->funcionarioEmail;
        $funcionario->empresa_id = $request->funcionarioIduser;
        $funcionario->telefone = $request->funcionarioTelefone;
        $funcionario->naturalidade = $request->funcionarioNaturalidade;

        $funcionario->save();


        return redirect()->route('sistema.funcionario');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('sistema.funcionario');
        
    }
}
