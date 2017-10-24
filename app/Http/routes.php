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

/*Route::get('/', ['as' => 'home', function () {
    return view('welcome');
}]);*/

Route::get('/', ['uses' => 'IndexController@show', 'as' => 'home']);

//Route::get('/pages', ['uses' => 'PagesController@index', 'as' => 'pages']);
// Единый контроллер
Route::controller('/pages','PagesController', ['getCreate' => 'pages.create']);

/*Route::get('/template', function () {
    return view('default.template');
});*/

Route::get('/template', ['uses' => 'IndexController@show', 'as' => 'template']);

//Route::get('/template', ['as' => 'template', 'uses' => 'IndexController@show']);

Route::get('/about', ['uses' => 'Admin\AboutController@show', 'as' => 'about']);
//Route::get('/pages', ['uses' => 'FirstController@getPages', 'as' => 'pages']);

Route::get('/articles', ['uses' => 'Admin\CoreController@getArticles', 'as' => 'articles']);
Route::get('/article/{id}', ['uses' => 'Admin\CoreController@getArticle', 'as' => 'article'/*, 'middleware' => 'mymiddle'*/]);

Route::match(['get','post'], 'contact', ['uses' => 'Admin\ContactController@show', 'as' => 'contact']);

// RESTfull маршрутизация

// list pages (в only формируется список методов для формирования маршрутов)
//Route::resource('/pages','Admin\CoreResource', ['only' => ['index','show','create','edit']]);
//(в except формируется список методов для исключения из маршрутов)
//Route::resource('/pages','Admin\CoreResource', ['except' => ['index','show','create','edit']]);