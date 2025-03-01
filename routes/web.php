<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})
    ->name('home');

Route::get('/portofolio', function () {
    return view('pages.portofolio');
})
    ->name('portofolio');

Route::get('/about', function () {
    return view('pages.about');
})
    ->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})
    ->name('contact');

Route::get('/detail', function () {
    return view('pages.detail');
})
    ->name('detail');
