<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductCategoryController;
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

Route::get('/product', [ProductController::class, 'product']);
Route::get('/danh-muc-san-pham', [ProductCategoryController::class, 'getdanhmucsanpham']);

Route::get('/chinh-sach-van-chuyen', [PolicyController::class, 'csvc'])->name('policy.van-chuyen');
Route::get('/dieu-khoan-giao-dich', [PolicyController::class, 'dkgd'])->name('policy.giao-dich');
Route::get('/phuong-thuc-thanh-toan', [PolicyController::class, 'pttt'])->name('policy.thanh-toan');
Route::get('/thoi-gian-giao-hang', [PolicyController::class, 'tggh'])->name('policy.giao-hang');
Route::get('/chinh-sach-bao-hanh', [PolicyController::class, 'csbh'])->name('policy.bao-hanh');
Route::get('/chinh-sach-bao-mat', [PolicyController::class, 'csbm'])->name('policy.bao-mat');
Route::get('/chinh-sach-doi-tra', [PolicyController::class, 'csdt'])->name('policy.doi-tra');
Route::get('/huong-dan-mua-hang', [PolicyController::class, 'hdmh'])->name('policy.mua-hang');
Route::get('/quyen-loi-vip', [PolicyController::class, 'qlv'])->name('policy.quyen-loi');
Route::get('/quy-dinh-ban-hang', [PolicyController::class, 'qdbh'])->name('policy.quy-dinh');
Route::get('/cau-hoi-thuong-gap', [PolicyController::class, 'chtg'])->name('policy.cau-hoi');

Route::get('/', [HomeController::class, 'home']);

Route::get('/khuyen-mai', function () {
    return view('cart.khuyenmai');
});

Route::get('/gio-hang', function () {
    return view('cart.giohang');
});

Route::get('/thanh-toan', function () {
    return view('cart.thanhtoan');
});
