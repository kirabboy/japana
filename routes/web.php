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


Route::get('/', [HomeController::class,'gt']);
Route::get('/csdd', [HomeController::class,'csdd']);

Route::get('/hddh', [HomeController::class,'hddh']);
Route::get('/cstt', [HomeController::class,'cstt']);
Route::get('/csgn', [HomeController::class,'csgn']);
Route::get('/csdt', [HomeController::class,'csdt']);
Route::get('/csbh', [HomeController::class,'csbh']);
Route::get('/qddk', [HomeController::class,'qddk']);
Route::get('/qlv', [HomeController::class,'qlv']);
Route::get('/dt', [HomeController::class,'dt']);

