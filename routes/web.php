<?php



Route::get('/', function () {
    return view('sistema.home');
})->name('sistema.home');


// Route::get('empresas/nova', function () {
//     return view('sistema.empresaEditar');
// })->name('sistema.empresa.ver');


// routa empresa
Route::get('empresas/novo', 'EmpresaController@create')->name('sistema.empresaNova');
Route::post('empresas', 'EmpresaController@store')->name('sistema.empresa.cadastrar');
Route::get('empresas/{empresa}', 'EmpresaController@show')->name('sistema.empresaShow');
Route::get('empresas','EmpresaController@index')->name('sistema.empresa');



// routa outro
Route::get('goffice','SobreController@index')->name('sistema.sobre');

// routa funcionario
Route::get('funcionarios','FuncionarioController@index')->name('sistema.funcionario');
Route::resource('usuarios','Form\\testController')->names('user')->parameters(['usuarios' =>'user']);
 
// Route::get('usuario','controllerMenu@Sobre')->name('menu.sobre');