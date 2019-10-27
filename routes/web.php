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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/cadastro', ['as' => 'cadastro', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('/cadastro', ['as' => 'cadastrar', 'uses' => 'Auth\RegisterController@register']);


//Route::group(['middleware' => ['auth','tutor']], function() {
//
//});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('tutors', 'TutorController');
Route::resource('pets', 'PetController');
Route::resource('petdocs', 'PetdocController');



Route::resource('eventoPets', 'EventoPetController');
Route::resource('petdocs', 'PetdocController');

//Route::get('vacinas/{pet?}', ['as'=> 'vacinas.index_pet', 'uses' => 'VacinaController@index_pet']);

//Route::resource('vacinas', 'VacinaController');

//Route::post('vacinas/store/{pet?}', ['as'=> 'vacinas.store', 'uses' => 'VacinaController@store']);
//Route::get('vacinas/create/{pet}', ['as'=> 'vacinas.create', 'uses' => 'VacinaController@create']);

Route::resource('medicacaos', 'MedicacaoController');

Route::get('eventos/{pet?}', ['as'=> 'eventos.index', 'uses' => 'EventoPetController@index']);
Route::post('eventos/store/{pet?}', ['as'=> 'eventos.store', 'uses' => 'EventoPetController@store']);
Route::get('eventos/create/{pet}', ['as'=> 'eventos.create', 'uses' => 'EventoPetController@create']);

Route::get('vacinas/{pet?}', ['as'=> 'vacinas.index_pet', 'uses' => 'VacinaController@index_pet']);
Route::get('vacinas', ['as'=> 'vacinas.index', 'uses' => 'VacinaController@index']);
Route::post('vacinas/{pet?}', ['as'=> 'vacinas.store', 'uses' => 'VacinaController@store']);
Route::get('vacinas/create/{pet?}', ['as'=> 'vacinas.create', 'uses' => 'VacinaController@create']);
Route::put('vacinas/{pet?}/{vacinas}', ['as'=> 'vacinas.update', 'uses' => 'VacinaController@update']);
Route::patch('vacinas/{pet?}/{vacinas}', ['as'=> 'vacinas.update', 'uses' => 'VacinaController@update']);
Route::get('vacinas/{pet?}/{vacinas}/edit', ['as'=> 'vacinas.edit', 'uses' => 'VacinaController@edit']);
Route::delete('vacinas_delete/{pet?}/{vacinas}', ['as'=> 'vacinas.destroy', 'uses' => 'VacinaController@destroy']);


