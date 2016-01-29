<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('login', 'HomeController@getLogin');

Route::post('login', 'HomeController@postLogin');

Route::get('logout', 'HomeController@getLogout');

Route::get('/tutcheck/{id}', 'UsersController@checkTutModal');

Route::get('/tutupdate/{id}', 'UsersController@changeTutModal');

Route::get('/qacheck/{id}', 'UsersController@checkQaModal');

Route::get('/qaupdate/{id}', 'UsersController@changeQaModal');

Route::post('/addtagstouser', 'HomeController@addTagsToUser');

Route::get('/search', 'HomeController@search');

Route::get('search-show/{id}', 'HomeController@searchShow');

Route::get('/newsfeed', 'HomeController@usersHome');

Route::get('/store', 'HomeController@showStore');

Route::get('qas/vote/{id}', 'QasController@vote');

Route::get('tutorials/vote/{id}', 'TutorialsController@vote');

Route::get('comments/vote/{id}', 'CommentsController@vote');

Route::resource('tutorials', 'TutorialsController');

Route::resource('qas', 'QasController');

Route::resource('tags', 'TagsController');

Route::resource('comments', 'CommentsController');

Route::resource('users', 'UsersController');

Route::resource('inventories', 'InventoriesController');





