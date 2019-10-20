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

Route::resource('eventoPets', 'EventoPetController');