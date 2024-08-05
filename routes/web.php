<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\DanhmucController;
use App\Http\Controllers\Admin\TintucController as AdminTintucController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TintucController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isMember;

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


Route::get('/',[TintucController::class,'trangchu'])->name('/');
Route::get('/chitiet/{id}',[TintucController::class,'chitiet'])->middleware(['auth','isMember']);
Route::get('/tintheoloai/{id}',[TintucController::class,'tinTheoLoai'])->middleware(['auth','isMember']);
Route::get('/timkiem',[TintucController::class,'timkiem'])->middleware(['auth','isMember']);

Route::resource('categories', DanhmucController::class)->middleware(['auth','isAdmin']);
Route::resource('posts', AdminTintucController::class)->middleware(['auth','isAdmin']);
Route::resource('accounts', AccountController::class)->middleware(['auth','isAdmin']);

Route::get('login',[AuthenController::class,'showFormLogin'])->name('login');
Route::post('login',[AuthenController::class,'handleLogin']);

Route::get('register',[AuthenController::class,'showFormRegister'])->name('register');
Route::post('register',[AuthenController::class,'handleRegister']);

Route::get('logout',[AuthenController::class,'logout'])->name('logout');

Route::get('member',[MemberController::class,'dashboard'])->middleware(['auth','isMember']);

Route::get('admin',[AdminController::class,'dashboard'])->middleware(['auth','isAdmin']);