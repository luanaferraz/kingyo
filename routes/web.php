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


Route::group(['middleware' => ['auth','tutor']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('pets', 'PetController');
    Route::resource('eventoPets', 'EventoPetController');

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
    Route::delete('documentos/{pet?}/{documentos}', ['as'=> 'petdocs.destroy', 'uses' => 'PetdocController@destroy']);

    Route::get('medicamentos/{pet?}', ['as'=> 'medicacaos.index', 'uses' => 'MedicacaoController@index']);
    Route::post('medicamentos/{pet?}', ['as'=> 'medicacaos.store', 'uses' => 'MedicacaoController@store']);
    Route::get('medicamentos/create/{pet?}', ['as'=> 'medicacaos.create', 'uses' => 'MedicacaoController@create']);
    Route::put('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.update', 'uses' => 'MedicacaoController@update']);
    Route::patch('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.update', 'uses' => 'MedicacaoController@update']);
    Route::get('medicamentos/{pet?}/{medicamentos}/edit', ['as'=> 'medicacaos.edit', 'uses' => 'MedicacaoController@edit']);
    Route::delete('medicamentos/{pet?}/{medicamentos}', ['as'=> 'medicacaos.destroy', 'uses' => 'MedicacaoController@destroy']);
    Route::get('medicamentos_ativar/{pet?}/{medicamentos}', ['as'=> 'medicacaos.ativar', 'uses' => 'MedicacaoController@ativar']);
    Route::get('medicamentos_desativar/{pet?}/{medicamentos}', ['as'=> 'medicacaos.inativar', 'uses' => 'MedicacaoController@inativar']);

    Route::get('fotos/{pet?}', ['as'=> 'fotos.index', 'uses' => 'FotoController@index']);
    Route::post('fotos/{pet?}', ['as'=> 'fotos.store', 'uses' => 'FotoController@store']);
    Route::get('fotos/create/{pet?}', ['as'=> 'fotos.create', 'uses' => 'FotoController@create']);
    Route::delete('fotos/{pet?}/{documentos}', ['as'=> 'fotos.destroy', 'uses' => 'FotoController@destroy']);

    Route::get('agenda', ['as'=> 'eventos.agenda', 'uses' => 'EventoPetController@agenda']);

    Route::get('/search', ['as'=> 'search', 'uses' => 'CursoController@buscar']);
});

Route::group(['middleware' => ['auth','profissional']], function() {
    Route::get('/profissional', 'HomeController@profissional');
    Route::resource('servicos', 'servicoController');
});

Route::resource('tutors', 'TutorController');
Route::resource('profissionals', 'ProfissionalController');






    Route::get('profissional/cadastrar', ['as' => 'registerProfissional', 'uses' => 'Auth\RegisterController@showRegistrationFormProfissional'] );
    Route::post('profissional/cadastrar',['as' => 'registerProfissional', 'uses' => 'Auth\RegisterController@registerProfissional']);



Route::resource('tutors', 'TutorController');


Route::resource('servicos', 'servicoController');

Route::resource('eventoProfissional', 'EventoProfissionalController');

Route::resource('evento_profissional', 'EventoProfissionalController');

Route::resource('profissionals', 'ProfissionalController');


