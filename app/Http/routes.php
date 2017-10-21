<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);

//Route::get('/pages', ['uses' => 'PagesController@index', 'as' => 'pages']);
// Единый контроллер
Route::controller('/pages','PagesController', ['getCreate' => 'pages.create']);

Route::get('/form', function (){
    return view('form');

});

Route::get('/about/{id}', 'FirstController@show');
//Route::get('/pages', ['uses' => 'FirstController@getPages', 'as' => 'pages']);

Route::get('/articles', ['uses' => 'Admin\CoreController@getArticles', 'as' => 'articles']);
Route::get('/article/{id}', ['uses' => 'Admin\CoreController@getArticle', 'as' => 'article']);

// RESTfull маршрутизация

// list pages (в only формируется список методов для формирования маршрутов)
//Route::resource('/pages','Admin\CoreResource', ['only' => ['index','show','create','edit']]);
//(в except формируется список методов для исключения из маршрутов)
//Route::resource('/pages','Admin\CoreResource', ['except' => ['index','show','create','edit']]);