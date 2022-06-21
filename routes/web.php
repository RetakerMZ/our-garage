<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;

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
    return view('landing');
});
Route::get('/car', function () {
    return view('car.car');
});
Route::get('/allcar', function () {
    return view('car.all_car');
});
Route::get('/detailcar', function () {
    return view('car.car_detail');
});
Route::get('/carousel', function () {
    return view('layout.carousel');
});
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'landing'])->name('landing');
    Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
    Route::get('/car/index', [CarController::class, 'index'])->name('car.index');
});

