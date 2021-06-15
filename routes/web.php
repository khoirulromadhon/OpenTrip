<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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


Auth::routes();
// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
// Route::resource('/','HomeController');
