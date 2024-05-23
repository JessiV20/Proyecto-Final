<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/menu',[App\Http\Controllers\FrontendController::class, 'menu'])->name('menu');
Route::get('/menu/detail/{id}',[App\Http\Controllers\FrontendController::class, 'detail'])->name('detail');
Route::get('/package/detailpromo',[App\Http\Controllers\FrontendController::class, 'detailpromo'])->name('detailpromo');
Route::get('/reservation',[App\Http\Controllers\FrontendController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [App\Http\Controllers\FrontendController::class, 'guardarReservacion'])->name('guardar_reservacion');