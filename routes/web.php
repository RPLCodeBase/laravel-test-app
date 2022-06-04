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
    return view('frontend.home');
});
Route::get('/webinar', function () {
    return view('layouts.webinar');
});
Route::get('/politeknik', function () {
    return view('layouts.politeknik');
});
Route::get('/prodi', function () {
    return view('layouts.prodi');
});
Route::get('/lomba', function () {
    return view('layouts.lomba');
});
//Route::get('/prodi', function () {
//    return view('layouts.prodi');
//});
//Route::get('/lomba', function () {
//    return view('layouts.lomba');
//});
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/info', function () {
    return view('information');
})->name('info');
