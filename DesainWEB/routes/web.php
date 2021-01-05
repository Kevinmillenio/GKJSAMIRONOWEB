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
    return view('welcome');
})->name('dashboard');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

Route::get('/ibadah', function () {
    return view('ibadah');
})->name('ibadah');

Route::get('/portofoliosingle', function () {
    return view('portofoliosingle');
})->name('portofoliosingle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','GuestController@contact')->name('contact');
Route::post('/send/message','GuestController@tulispesan')->name('send_message');