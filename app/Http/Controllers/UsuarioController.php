<?php

namespace App\Http\Controllers;

use App\User;
use App\usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()===true){
            return view('sistema.home');
        } 
            return redirect()->route('Formlogin');
            
        }
    
        public function FormLogin(){
        
        return view('login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function logar(Request $request)
    {
       

        $credenciais=[
            'email' =>$request->email,
            'senha' =>$request->senha,     
        ];

        $login=User::where('email',$credenciais['email'])->where('senha',$credenciais['senha'])->first();
        if ($login) {
            Auth::login($login,false);
                return view('sistema.home');          
        }
        else {
            return redirect()->back()->withInput()->withErrors(['Email ou senha incorrenta!']); 
        }
    
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('Formlogin');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
