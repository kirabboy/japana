<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
//Route - Theo dõi đơn hàng
Route::get('/theo-doi-don-hang', function () {
    return view('order_tracking/theo-doi-don-hang_main-layout');
});

//Route - Chăm sóc khách hàng
Route::get('/chinh-sach-van-chuyen', function () {
    return view('order_tracking/chinh-sach-van-chuyen');
});
Route::get('/dieu-khoan-giao-dich', function () {
    return view('order_tracking/dieu-khoan-giao-dich');
});
Route::get('/phuong-thuc-thanh-toan', function () {
    return view('order_tracking/phuong-thuc-thanh-toan');
});
Route::get('/thoi-gian-giao-hang', function () {
    return view('order_tracking/thoi-gian-giao-hang');
});
Route::get('/chinh-sach-bao-hanh', function () {
    return view('order_tracking/chinh-sach-bao-hanh');
});
Route::get('/chinh-sach-bao-mat', function () {
    return view('order_tracking/chinh-sach-bao-mat');
});
Route::get('/chinh-sach-doi-tra-va-hoan-tien', function () {
    return view('order_tracking/chinh-sach-doi-tra-va-hoan-tien');
});
Route::get('/huong-dan-mua-hang', function () {
    return view('order_tracking/huong-dan-mua-hang');
});
Route::get('/quyen-loi-vip', function () {
    return view('order_tracking/quyen-loi-vip');
});
Route::get('/quy-dinh-ban-hang-tren-website-japana', function () {
    return view('order_tracking/quy-dinh-ban-hang-tren-website-japana');
});
Route::get('/cau-hoi-thuong-gap', function () {
    return view('order_tracking/cau-hoi-thuong-gap');
});
//Route - Đơn hàng sau khi tra cứu
Route::get('/don-hang-sau-khi-tra-cuu', function () {
    return view('order_tracking/don-hang-sau-khi-tra-cuu');
});

//Route - Liên hệ
Route::get('/lien-he', function () {
    return view('contact/lien-he');
});

//Route - Tài Khoản
Route::get('/tai-khoan', function () {
    return view('account/account');
});


Route::get('/quen-mat-khau', function () {
    return view('account/quen-mat-khau');
});

