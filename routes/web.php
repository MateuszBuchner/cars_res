<?php

use App\Http\Controllers\Admin\AdminCarsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\User\ProfilController;
use App\Http\Controllers\User\UserAddCarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['can:isAdmin'])->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('/users', AdminUserController::class);
        Route::resource('/cars', AdminCarsController::class);
    });
    Route::resource('/profil', ProfilController::class);
    Route::resource('/dodaj-ogloszenie', UserAddCarController::class);
});
