<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Cars\CarsController;
use App\Http\Controllers\User\CarController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserAddCarController;

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
Route::resource('/', MainController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/cars', [CarsController::class, 'index'])->name('cars');
Route::get('/cars/search', [CarsController::class, 'search'])->name('cars.search');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('caropis');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['can:isAdmin'])->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('/users', AdminUserController::class);
        Route::get('/show', [CarController::class, 'index'])->name('show');
        Route::get('/dodaj-ogloszenie/{id}', [UserAddCarController::class,'destroy'])->name('destroy');
        Route::post('/approve/{id}', [UserAddCarController::class,'edit'])->name('approve-usercar');

    });
    Route::resource('/dodaj-ogloszenie', UserAddCarController::class);
    Route::resource('/profile', ProfileController::class);
    Route::post('/add-car', [CarController::class, 'store']);
});
