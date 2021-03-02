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
})->name('welcome');

// Route::get('chart', 'ChartController@index');
Route::get('/input', 'KuisionerkelasController@index')->name('index');
// Route::post('/input/proses', 'KuisionerkelasController@proses')->name('proses');
Route::post('input/store', 'KuisionerkelasController@store')->name('store');

//Login
Route::get('login', 'AuthController@getlogin')->name('Login');
Route::post('login', 'AuthController@postlogin')->name('login')->name('login');

//Register
Route::get('register', 'AuthController@getregister')->name('register');
Route::post('register', 'AuthController@postregister')->name('register')->name('register');
 // Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
