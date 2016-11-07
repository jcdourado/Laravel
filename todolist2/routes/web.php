<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/excluir/{id}',"AskController@excluir");

Route::get('/adicionar',function(){
    return view('adicionar');
});

Route::post('/adicionado','AskController@adicionar');

Route::get('/editar/{id}','AskController@redirectEditar');

Route::post('/alterado/{id}','AskController@editar');
