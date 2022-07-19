<?php

use App\Http\Controllers\AllCars;
use App\Http\Controllers\DetailCars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingOurGarage;
use App\Http\Controllers\AllCarsController;
use App\Http\Controllers\CarTypeController;


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
// Route::get('/car', function () {
//     return view('car.car');
// });
// Route::get('/allcar', function () {
//     return view('car.all_car');
// });
// Route::get('/detailcar', function () {
//     return view('car.car_detail');
// });
Route::get('/carousel', function () {
    return view('layout.carousel');
});
Route::get('/car',[LandingOurGarage::class,'index'])->name('car');
Route::get('/allcar',[AllCars::class,'index'])->name('allcar');
Route::get('/detailcar',[DetailCars::class,'index'])->name('detailcar');

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'landing'])->name('landing');

    //Kategori Mobil

    Route::get('/tipe/index', [CarTypeController::class, 'index'])->name('car.tipe.index');
    Route::get('/tipe/create', [CarTypeController::class, 'create'])->name('car.tipe.create');
    Route::get('/tipe/{id}', [CarController::class, 'edit'])->name('car.tipe.edit');
    Route::get('/tipe/delete/{id}', [CarController::class, 'delete'])->name('car.tipe.delete');
    Route::post('/tipe/insert', [CarTypeController::class, 'insert'])->name('car.tipe.insert');

    //Mobil
    Route::get('/car/create', [CarController::class, 'create'])->name('car.car.create');
    Route::get('/car/index', [CarController::class, 'index'])->name('car.car.index');
    Route::post('/car/insert', [CarController::class, 'insert'])->name('car.car.insert');
    Route::get('/car/{id}', [CarController::class, 'edit'])->name('car.car.edit');
    Route::post('/car/update/{id}', [CarController::class, 'update'])->name('car.car.update');
    Route::get('/car/delete/{id}', [CarController::class, 'delete'])->name('car.car.delete');


});

