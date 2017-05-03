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

//Route::get('/alunos', function(){
//    return view('alunos.index');
//});

Route::group([/*'middleware' => 'auth'*/], function(){
    Route::get('/login', function(){
        return 'Login';
    });
    Route::get('/', 'IndexController@index');
    Route::get('/alunos', 'AlunosController@index');
    Route::get('/professores', 'ProfessoresController@index');
    Route::get('/turmas', 'TurmasController@index');
});
