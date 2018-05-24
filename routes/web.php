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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products','ProductController@index')->name('products');
Route::get('/about-us', function(){
	return view('about');
});
Route::get('/contact-us', function(){
	return view('contact-us');
});
Route::get('/blog', function(){
	return view('blog');
});
Route::get('/partners', function(){
	return view('partners');
});
Route::get('/join-dmc', function(){
	return view('joindmc');
});
