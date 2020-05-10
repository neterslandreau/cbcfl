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

Route::get('/', 'HomeController@front')->name('front');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articles', 'ArticlesController@index')->name('blog');
Route::get('/childrens-ministry', 'HomeController@preschool')->name('preschool');
Route::get('/prayer-team', 'HomeController@prayerteam')->name('prayerteam');
Route::get('/womens-ministry', 'HomeController@women')->name('women');
//Route::get('/articles' , 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{slug}/edit', 'ArticlesController@edit');
Route::get('/articles/{slug}/delete', 'ArticlesController@delete');
Route::get('/articles/{slug}', 'ArticlesController@show');
Route::post('/articles/{slug}/edit', 'ArticlesController@edit')->name('edit');
Route::post('/articles', 'ArticlesController@store');
Route::post('/articles/{slug}/comments', 'CommentsController@store');
Route::get('/articles/tagged/{tag}', 'ArticlesController@tagged');
