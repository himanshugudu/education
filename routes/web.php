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
Route::get('/farhat',[
	'middleware'=>'farhat',
	'uses' => 'FarhatController@farhat',
]);

Route::get('/dd','EducationController@index');
Route::get('/courses','EducationController@course');
Route::get('/teachers','EducationController@teachers');
Route::get('/about','EducationController@about');
Route::get('/pricing','EducationController@pricing');
Route::get('/blog','EducationController@blog');
Route::get('/blog','EducationController@contact');
Route::get('/',function(){
	return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
