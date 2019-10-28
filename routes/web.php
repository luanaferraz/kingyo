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
//Route::resource('petdocs', 'PetdocController');

//Route::resource('medicacaos', 'MedicacaoController');

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


Route::get('documentos/{pet?}', ['as'=> 'petdocs.index', 'uses' => 'PetdocController@index']);
Route::post('documentos/{pet?}', ['as'=> 'petdocs.store', 'uses' => 'PetdocController@store']);
Route::get('documentos/create/{pet?}', ['as'=> 'petdocs.create', 'uses' => 'PetdocController@create']);
Route::put('documentos/{pet?}/{documentos}', ['as'=> 'petdocs.update', 'uses' => 'PetdocController@update']);
Route::patch('documentos/{pet?}/{documentos}', ['as'=> 'petdocs.update', 'uses' => 'PetdocController@update']);
Route::get('documentos/{pet?}/{documentos}/edit', ['as'=> 'petdocs.edit', 'uses' => 'PetdocController@edit']);
Route::delete('documentos/{pet?}/{documentos}', ['as'=> 'petdocs.destroy', 'uses' => 'PetdocController@destroy']);

Route::get('medicamentos/{pet?}', ['as'=> 'medicacaos.index', 'uses' => 'MedicacaoController@index']);
Route::post('medicamentos/{pet?}', ['as'=> 'medicacaos.store', 'uses' => 'MedicacaoController@store']);
Route::get('medicamentos/create/{pet?}', ['as'=> 'medicacaos.create', 'uses' => 'MedicacaoController@create']);
Route::put('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.update', 'uses' => 'MedicacaoController@update']);
Route::patch('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.update', 'uses' => 'MedicacaoController@update']);
Route::get('medicamentos/{pet?}/{medicamentos}/edit', ['as'=> 'medicacaos.edit', 'uses' => 'MedicacaoController@edit']);
Route::delete('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.destroy', 'uses' => 'MedicacaoController@destroy']);
