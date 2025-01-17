<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});

// Route::resource('categories', 'CategoryController')->middleware('auth');
// Route::resource('products', 'ProductController')->middleware('auth');

Auth::routes();
