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
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/home', function () {
    return view('isi.home');
});

Route::get('/menu', 'restoController@index')->name('menu');
Route::post('/inserMenu','restoController@insert')->name('inserMenu');

// Route::get('contact', function () {
//     return view('isi.contact');
// });

// Route::get('about', function () {
//     return view('isi.about');
// });

