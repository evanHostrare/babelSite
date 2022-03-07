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

// Route::get('/', function () {
//     return view('layouts.master');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/slider',[App\Http\Controllers\HomeController::class, 'slider'])->name('slider');
Route::get('/admin/add',[App\Http\Controllers\HomeController::class, 'addslider'])->name('addslider');
Route::post('/admin/save',[App\Http\Controllers\HomeController::class, 'save'])->name('saveslider');
Route::get('/admin/delete/{id}',[App\Http\Controllers\HomeController::class, 'delete'])->name('sliderdelete');
Route::get('/admin/edit/{id}',[App\Http\Controllers\HomeController::class, 'edit'])->name('editslider');
Route::post('/admin/update/{id}',[App\Http\Controllers\HomeController::class, 'update'])->name('updateslider');
