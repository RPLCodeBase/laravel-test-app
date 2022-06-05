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


//Front UI
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/webinar', function () {
    return view('frontend.webinar');
});
Route::get('/politeknik', function () {
    return view('frontend.politeknik');
});
Route::get('/prodi', function () {
    return view('frontend.prodi');
});
Route::get('/lomba', function () {
    return view('frontend.lomba');
});


//Admin UI
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/info', function () {
    return view('information');
})->name('info');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/contest', function () {
    return view('admin.contest-index');
})->name('contest');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/info/create', function () {
    return view('admin.information.create-info');
})->name('create-info');
