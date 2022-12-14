<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


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

Route::get('/', [MyController::class, 'index'])->name('index');
Route::get('/add', [MyController::class, 'add'])->name('add');
Route::get('/add/hello', [MyController::class, 'hello'])->name('hello');
Route::get('/table', [MyController::class, 'table'])->name('table');




