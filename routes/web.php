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

Route::prefix('jobs')->group(function()
{
    Route::get('/', [JobsController::class, 'index'])->name('jobs');
    Route::post('/store', [JobsController::class, 'store'])->name('jobs.store');
    Route::get('/create', [JobsController::class, 'create'])->name('jobs.create')->middleware('auth');
    Route::get('/{job}', [JobsController::class, 'show'])->name('jobs.show');
    Route::put('/{job}', [JobsController::class, 'update'])->name('jobs.update')->middleware('auth');
});

Route::prefix('services')->group(function()
{
    Route::get('/', [ServicesController::class, 'index'])->name('services');
    Route::get('/create', [ServicesController::class, 'create'])->name('services.create')->middleware('auth');
    Route::post('/', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/{service}', [ServicesController::class, 'show'])->name('services.show');
    Route::put('/{service}', [ServicesController::class, 'update'])->name('services.update')->middleware('auth');
});

Route::prefix('personal')->middleware('auth')->group(function()
{
    Route::get('/', [PersonalController::class, 'index'])->name('personal');
});

Route::get( '/logout', [LogoutController::class, 'index'])->name('logout');

