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

//// Authentication Routes
Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


// pages Routes
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

//Crud (resource managment)
Route::resource('posts','PostController');
//-----------------------------------------------------
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', ['as' => 'blog.single','uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

//--------------------------------------------------------
// Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

// Tags
Route::resource('tags', 'TagController', ['except' => ['create']]);

// Comments
//Route::resource('comments', 'CommentsController', ['except' => ['create']]);
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'PagesController@getIndex')->name('home');

Route::get('/phpinfo', function() {
    return phpinfo();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
