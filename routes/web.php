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
    return view('master');
});
Route::get('/home', function () {
    return view('guest.pages.home.home');
})->name('guest.home');
Route::get('/login', function () {
    return view('guest.pages.login.login');
})->name('guest.login');
Route::get('/tin-tuc',function(){
    return view('guest.pages.news.news');
})->name('guest.tin-tuc.list');
Route::get('/logout', function () {
    return view('guest.pages.logout.logout');
})->name('guest.logout');