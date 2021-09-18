<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'csvc']);
Route::get('/dkgd', [HomeController::class,'dkgd']);
Route::get('/pttt', [HomeController::class,'pttt']);
Route::get('/tggh',[HomeController::class,'tggh']);
Route::get('/csbh',[HomeController::class,'csbh']);
Route::get('/csbm',[HomeController::class,'csbm']);
Route::get('/csdt',[HomeController::class,'csdt']);
Route::get('/hdmh',[HomeController::class,'hdmh']);
Route::get('/qlv',[HomeController::class,'qlv']);
Route::get('/qdbh',[HomeController::class,'qdbh']);
Route::get('/chtg',[HomeController::class,'chtg']);

