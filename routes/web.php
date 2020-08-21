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


use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/unidades',  function(){
    return view('uj.index');
})->name('uj.index');

Route::resource('personas', 'PersonaController');


