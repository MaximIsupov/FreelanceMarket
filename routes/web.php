<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('login')->group(function()
{
    Route::get( '/', [LoginController::class, 'index'])->name('login');
    Route::post( '/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::prefix('register')->group(function()
{
    Route::get( '/', [RegisterController::class, 'index'])->name('register');
    Route::post( '/store', [RegisterController::class, 'store'])->name('register.store');
});

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/jobs/{job}', [JobsController::class, 'show'])->name('jobs.show');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');

Route::prefix('personal')->group(function()
{
    Route::get('/', [PersonalController::class, 'index'])->name('personal');
})->middleware('auth');

Route::get( '/logout', [LogoutController::class, 'index'])->name('logout');

