<?php

use App\Http\Controllers\TintucController;
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


Route::get('/',[TintucController::class,'trangchu']);
Route::get('/chitiet/{id}',[TintucController::class,'chitiet']);
Route::get('/tintheoloai/{id}',[TintucController::class,'tinTheoLoai']);
Route::get('/timkiem',[TintucController::class,'timkiem']);

