<?php

use App\Http\Controllers\landingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PpdbController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Theses
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [landingController::class, 'index'])->name('landing');
Route::get('/login', [landingController::class, 'login'])->name('login');

// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/login', 'Auth\LoginController@login')->middleware('throttle:3,3');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->middleware('throttle:6,1');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');


Route::middleware(['auth'])->group(function(){
    Route::prefix('/ppdb')->controller(PpdbController::class)->name('ppdb.')->group(function() {
        Route::get('/daftar', 'daftar')->name('daftar');
        Route::get('/pembayaran', 'pembayaran')->name('pembayaran');
        Route::get('/listpen', 'listpen')->name('listpen');
        Route::get('/pengumuman', 'pengumuman')->name('pengumuman');
    });
});
