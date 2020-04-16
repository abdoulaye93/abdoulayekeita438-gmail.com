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

Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/', function () {
    return view('home.shop');
})->name('shop');

Route::get('/create', function () {
    return view('dashboard.product.create');
})->name('product.create');

Route::post('/store/image', 'TestController@store');
Route::get('/show', function () {
    return view('dashboard.product.show');
})->name('product.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
