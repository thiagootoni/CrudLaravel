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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['auth']], function(){

    Route::get('/','TesteController@index');
    Route::resource('/teste', 'TesteController');
    Route::get('/home', 'TesteController@index')->name('home');
    

    Route::prefix('/teste')->name('questao.')->group(function (){    
        
        Route::get('/{teste}/questao', 'QuestaoController@index')->name('index');
        Route::post('/{teste}/questao', 'QuestaoController@store')->name('store');
        Route::get('/{teste}/questao/create', 'QuestaoController@create')->name('create');
        Route::get('/{teste}/questao/{questao}', 'QuestaoController@show')->name('show');
        Route::post('/{teste}/questao/{questao}', 'QuestaoController@update')->name('update');
        Route::delete('/{teste}/questao/{questao}', 'QuestaoController@destroy')->name('destroy');
        Route::get('/{teste}/questao/{questao}/edit', 'QuestaoController@edit')->name('edit');
        
    });

    Route::prefix('/teste')->name('exame.')->group(function (){ 
        Route::get('/{teste}/exame', 'ExameController@show')->name('show');
        Route::post('/{teste}/exame/store', 'ExameController@store')->name('store');
    });

});

Auth::routes();

//Route::resource('/teste', 'TesteController');
//Route::resource('/questao', 'QuestaoController');






