<?php

use App\Http\Controllers\AllCars;
use App\Http\Controllers\DetailCars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingOurGarage;
use App\Http\Controllers\AllCarsController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Route as RoutingRoute;

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


Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::get('/detail_bike', function () {
    return view('bike.bike_detail');
});

Route::get('/carousel', function () {
    return view('layout.carousel');
});
Route::get('/',[LandingController::class,'index'])->name('landing');


Route::prefix('car')->group(function(){
    Route::get('/',[LandingOurGarage::class,'index'])->name('car');
    Route::get('/all',[AllCars::class,'index'])->name('allcar');
    Route::get('/{id}', [DetailCars::class, 'show'])->name('detailcar');

});


//Login
Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::post('/login',[LoginController::class,'authenticate'])->name('authenticate');

Route::middleware(['auth'])->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'landing'])->name('admin');

    //Kategori Mobil
    Route::get('/tipe/index', [CarTypeController::class, 'index'])->name('car.tipe.index');
    Route::get('/tipe/create', [CarTypeController::class, 'create'])->name('car.tipe.create');
    Route::get('/tipe/{id}', [CarTypeController::class, 'edit'])->name('car.tipe.edit');
    Route::get('/tipe/delete/{id}', [CarTypeController::class, 'delete'])->name('car.tipe.delete');
    Route::post('/tipe/insert', [CarTypeController::class, 'insert'])->name('car.tipe.insert');
    Route::post('/car/update/{id}', [CarTypeController::class, 'update'])->name('car.tipe.update');

    //Mobil
    Route::get('/car/create', [CarController::class, 'create'])->name('car.car.create');
    Route::get('/car/index', [CarController::class, 'index'])->name('car.car.index');
    Route::post('/car/insert', [CarController::class, 'insert'])->name('car.car.insert');
    Route::get('/car/{id}', [CarController::class, 'edit'])->name('car.car.edit');
    Route::post('/car/update/{id}', [CarController::class, 'update'])->name('car.car.update');
    Route::get('/car/delete/{id}', [CarController::class, 'delete'])->name('car.car.delete');

    //Motor
    Route::get('/bike/create', [BikeController::class, 'create'])->name('admin.bike.create');
    Route::get('/bike/index', [BikeController::class, 'index'])->name('admin.bike.index');
    Route::post('/bike/insert', [BikeController::class, 'insert'])->name('admin.bike.insert');
    Route::get('/bike/{id}', [BikeController::class, 'edit'])->name('admin.bike.edit');
    Route::post('/bike/update/{id}', [BikeController::class, 'update'])->name('admin.bike.update');
    Route::get('/bike/delete/{id}', [BikeController::class, 'delete'])->name('admin.bike.delete');

    //Kategori Motor
    Route::get('/bike_type/index', [BikeController::class, 'index'])->name('admin.bike_type.index');
    Route::get('/bike_type/create', [BikeController::class, 'create'])->name('admin.bike_type.create');
    Route::get('/bike_type/{id}', [BikeController::class, 'edit'])->name('admin.bike_type.edit');
    Route::get('/bike_type/delete/{id}', [BikeController::class, 'delete'])->name('admin.bike_type.delete');
    Route::post('/bike_type/insert', [BikeController::class, 'insert'])->name('admin.bike_type.insert');
    //testimoni
    Route::resource('testimoni', TestimoniController::class);
    Route::post('/testimoni/insert', [TestimoniController::class, 'insert'])->name('testimoni.insert');


});

