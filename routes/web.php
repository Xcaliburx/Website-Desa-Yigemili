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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/edit/profile/{id}', 'ProfileController@edit')->name('profile.edit');

    Route::patch('/profile/{id}', 'ProfileController@update')->name('profile.update');

    Route::get('/create/penduduk', 'PendudukController@create')->name('penduduk.create');

    Route::post('/penduduk', 'PendudukController@store')->name('penduduk.store');

    Route::get('/create/potensi', 'PotensiController@create')->name('potensi.create');

    Route::post('/potensi', 'PotensiController@store')->name('potensi.store');

    Route::get('/create/produk', 'ProductController@create')->name('produk.create');

    Route::post('/produk', 'ProductController@store')->name('produk.store');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'ProfileController@view')->name('profile.view');

Route::get('/penduduk', 'PendudukController@index')->name('penduduk.view');

Route::get('/potensi', 'PotensiController@index')->name('potensi.view');

Route::get('/produk', 'ProductController@index')->name('produk.view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
