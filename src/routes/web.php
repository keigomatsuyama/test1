<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
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
Route::get('/contact', [CategoryController::class, 'index']);
Route::post('/confirm', [CategoryController::class, 'confirm']);
Route::get('/register', [IndexController::class, 'index']);
Route::post('/register', [IndexController::class, 'store']);
Route::get('/login', [IndexController::class, 'submit']);
Route::post('/login', [IndexController::class, 'submit1']);
Route::post('/admin',[IndexController::class, 'admin']);
Route::post('/thanks', [IndexController::class, 'thanks']);
