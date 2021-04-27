<?php



Route::get('/', function () {
    return view('sistema.home');
})->name('sistema.home');

Route::get('empresas','EmpresaController@index')->name('sistema.empresa');
Route::get('funcionarios','FuncionarioController@index')->name('sistema.funcionario');


Route::resource('usuarios','Form\\testController')->names('user')->parameters(['usuarios' =>'user']);
 
// Route::get('usuario','controllerMenu@Sobre')->name('menu.sobre');