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
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/4042', function () {
    return view('4042');
});
Route::get('/blog2-single', function () {
    return view('blog2-single');
});
Route::get('/blog2', function () {
    return view('blog2');
});
Route::get('/cart2', function () {
    return view('cart2');
});
Route::get('/checkout2', function () {
    return view('checkout2');
});
Route::get('/contact-us2', function () {
    return view('contact-us2');
});
