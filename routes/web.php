<?php



Route::get('/', function () {
    return view('sistema.home');
})->name('sistema.home');



// routa empresa
Route::prefix('empresas')->group (function(){

    Route::get('/','EmpresaController@index')->name('sistema.empresa');
    Route::get('/nova-empresa', 'EmpresaController@create')->name('sistema.empresaNova');
    Route::post('', 'EmpresaController@store')->name('sistema.empresa.cadastrar');
    Route::put('/update/{empresa}', 'EmpresaController@update')->name('sistema.empresactualizar');
    
    Route::put('/Eliminar-empresa/{empresa}', 'EmpresaController@destroy')->name('sistema.empresaDeletar');
    Route::get('/editar-empresa/{empresa}', 'EmpresaController@edit')->name('sistema.empresaEdit');
    Route::get('/{empresa}', 'EmpresaController@show')->name('sistema.empresaShow');
});





// routa funcionario
Route::prefix('funcionarios')->group (function(){ 
    Route::get('/','FuncionarioController@index')->name('sistema.funcionario');
    Route::post('', 'FuncionarioController@store')->name('sistema.funcionario.cadastrar');
    Route::put('/update/{funcionario}', 'FuncionarioController@update')->name('sistema.funcionarioctualizar');
    Route::put('/deletar/{funcionario}', 'FuncionarioController@destroy')->name('sistema.funcionarioDelectar');
    Route::get('/novo-funcionario', 'FuncionarioController@create')->name('sistema.funcionarioNovo');
    Route::get('/editar-funcionario/{funcionario}', 'FuncionarioController@edit')->name('sistema.funcionarioEdit');   
    Route::get('/detalhe-funcionario/{funcionario}', 'FuncionarioController@show')->name('sistema.funcionarioaDetalhe');   
});


// routa goffice
Route::prefix('goffice')->group (function(){
    Route::get('/','SobreController@index')->name('sistema.sobre');
    
});
// Route::get('usuario','controllerMenu@Sobre')->name('menu.sobre');
Route::resource('usuarios','Form\\testController')->names('user')->parameters(['usuarios' =>'user']);