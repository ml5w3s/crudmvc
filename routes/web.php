<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Form'],function(){
//VERB GET
Route::get('usuarios','TestController@listAllUsers')->name('users.listAllUsers');
Route::get('usuarios/novo','TestController@formAddUser')->name('users.formAddUser');
Route::get('usuarios/{user}','TestController@listUser')->name('users.list');
Route::get('usuarios/editar/{user}','TestController@formEditUser')->name('users.formEditUser');

//VERB POST 
Route::post('usuarios/store','TestController@storeUser')->name('users.store');

//VERB PUT/PATCH
Route::put('usuarios/edit/{user}','TestController@edit')->name('users.edit');

//VERB DELETE
Route::delete('usuarios/destroy/{user}','TestController@destroy')->name('users.destroy');   
});
