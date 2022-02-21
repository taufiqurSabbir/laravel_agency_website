<?php

use App\Http\Controllers\viewController;
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

Route::get('/',[viewController::class,'home'])->name('home');
Route::get('about',[viewController::class,'about'])->name('about');
Route::get('service',[viewController::class,'service'])->name('service');
Route::get('Portfolio',[viewController::class,'portfolio'])->name('portfolio');
Route::get('team',[viewController::class,'team'])->name('team');
Route::get('pricing',[viewController::class,'price'])->name('price');
Route::get('contact',[viewController::class,'contact'])->name('contact');

