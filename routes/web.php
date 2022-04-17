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
//     return view('welcome');
// });
Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('/login-process',[\App\Http\Controllers\AuthController::class,'loginProcess'])->name('login.process');
Route::post('/contact',[\App\Http\Controllers\AuthController::class,'contact'])->name('contact');

Route::middleware('AdminCheck')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
    
});
Route::view('/','client.pages.index');
Route::view('/about','client.pages.about');
Route::view('/contact','client.pages.contact');