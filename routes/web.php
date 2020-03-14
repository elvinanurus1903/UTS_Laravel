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
    return view('front/landingpage');
});
Route::get('/landingpage', function () {
    return view('front/landingpage');
});
Route::get('/premium', function () {
    return view('front/premium');
});
Route::get('/help', function () {
    return view('front/help');
});
Route::group(['middleware' => ['logged']],function(){
	Route::get('/login', 'FilmController@login')->name('login');
	Route::post('user/add', 'UserController@store');
	Route::post('user/login', 'UserController@login');
	Route::get('/register', 'FilmController@register');
});

Route::group(['middleware' => ['admin']],function(){
	Route::resource('film','FilmController');
	Route::get('/logout', 'UserController@logout');
	Route::resource('genre','GenreController');
	Route::get('excel/export_excel', 'ExcelController@export_excel');
	Route::get('excel/cetak_pdf', 'ExcelController@cetak_pdf');
});

Route::resource('front','FrontController');
