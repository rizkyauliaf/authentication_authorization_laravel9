<?php

use App\Http\Controllers\HomeController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'level:admin']], function () {
    Route::get('admin', function () {
        return 'Ini halaman Admin';
    });
});


Route::group(['middleware' => ['auth', 'level:user']], function () {
    Route::get('user', function () {
        return 'Ini halaman User';
    });
});

Route::group(['middleware' => ['auth', 'level:siswa']], function () {
    Route::get('siswa', function () {
        return 'Ini halaman Siswa';
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login_lte', [App\Http\Controllers\HomeController::class, 'login_lte'])->name('home');
