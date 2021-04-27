<?php

namespace App\Http\Controllers;

use App\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $empresas=empresa::all();
        return view ('sistema.empresa',[
            'empresas' =>$empresas
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('sistema.empresa.novo');
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa=new empresa();
        $empresa->nome_empresa=$request->empresaNome;
        $empresa->email=$request->empresaEmail;
        $empresa->telefone=$request->empresaTelefone;
        $empresa->site=$request->empresaWebsite;
        $empresa->descricao=$request->empresaDescricao;
        
        $empresa->save();
        

        return redirect()->route('sistema.empresa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa  $empresa)
    {
       if($empresa){
           return view ('sistema.empresa.ver',[
               'empresa' =>$empresa
               ]);

            }else{     
                return redirect()->route('sistema.empresa');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(empresa $empresa)
    {
        //
    }
}
