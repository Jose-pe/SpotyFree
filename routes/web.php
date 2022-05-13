<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\discos\discosController;

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

//Route::get('listar', [discosController::class, 'index']);
Route::view('/', 'welcome');
Route::resource('discos', 'App\Http\Controllers\discos\discosController')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
