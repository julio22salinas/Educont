<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Retornar vistas
Route::get('/', 'PagesController@inicio');
    //informacion controlada por PagesController


Route::get('about/{nombre?}', 'PagesController@nosotros')->name('nosotro');

//Atajos para retornar vistas
//Route::view('galeria','fotos')->name('foto');
Route::get('galeria','PagesController@fotos')->name('foto'); 

Route::get('blogger','PagesController@blog')->name('blo');

//Route::get('creater','UsersController@crear')->name('crear');

Route::group(['prefix'=>'admin'], function(){
   // Route::resource('creater','UsersController@crear');
   //Route::get('register','UsersController@index')->name('registro');
  // Route::get('create','UsersController@create')->name('create');

   Route::resource('users','UsersController');
   Route::get('users/{id}/destroy', [
       'uses' => 'UsersController@destroy',
       'as'   => 'admin.users.destroy'
   ]);
 //Route::get('users/{id}/edit', [
      //  'uses' => 'UsersController@edit',
      //  'as'   => 'users.edit'
// ]);
});

//Route::view('about','nosotros')->name('nosotro');
