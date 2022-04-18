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
Route::post('/shipping',[\App\Http\Controllers\ShippmentController::class,'shipping'])->name('shipping.process');
Route::post('/tracking',[\App\Http\Controllers\ShippmentController::class,'tracking'])->name('tracking.process');
Route::post('/log-status/{id}',[\App\Http\Controllers\ShippmentController::class,'logStatus'])->name('log.status');
Route::get('/status-change/{id}',[\App\Http\Controllers\ShippmentController::class,'statusChange'])->name('status.change');

Route::middleware('AdminCheck')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
    
});
Route::view('/','client.pages.index');
Route::view('/about','client.pages.about');
Route::view('/contact','client.pages.contact');