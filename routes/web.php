<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PagesController@index')->name('pages.index');



Route::get('/contact','PagesController@contact');

Route::get('/create', function () {
    return view('create');
});


Route::get('/blog','PostController@index');

Route::get('/blog/create','PostController@create');
Route::post('/blog','PostController@store')->name('blog.store');

Route::get('/blog/articles/{article}','PostController@show')->name('article.show');
Route::get('/project', function () {
    return view('project.index');
});

Route::get('/project','ProjectsController@index');



