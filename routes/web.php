<?php



Route::get('/', function () {
    return view('welcome');
});


Route::resource('usuarios','Form\\testController')->names('user')->parameters(['usuarios' =>'user']);
 
// Route::get('usuario','controllerMenu@Sobre')->name('menu.sobre');