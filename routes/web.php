<?php

use App\Http\Controllers\AllCars;
use App\Http\Controllers\DetailCars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\CameraProductController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingOurGarage;
use App\Http\Controllers\AllCarsController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BikeTypeController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\BikeProductController;

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

Route::get('/carousel', function () {
    return view('layout.carousel');
});
Route::get('/',[LandingController::class,'index'])->name('landing');


Route::prefix('car')->group(function(){
    Route::get('/',[LandingOurGarage::class,'index'])->name('car');
    Route::get('/all',[AllCars::class,'index'])->name('allcar');
    Route::get('/{id}', [DetailCars::class, 'show'])->name('detailcar');

});

Route::prefix('bike')->group(function(){
    Route::get('/',[BikeProductController::class,'index'])->name('bike.index');
    Route::get('/{id}',[BikeProductController::class,'allbike'])->name('bike_detail.index');

});

Route::get('/camera',[CameraProductController::class,'index'])->name('camera');


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
    Route::post('/tipe/update/{id}', [CarTypeController::class, 'update'])->name('car.tipe.update');

    //Mobil
    Route::get('/car/create', [CarController::class, 'create'])->name('car.car.create');
    Route::get('/car/index', [CarController::class, 'index'])->name('car.car.index');
    Route::post('/car/insert', [CarController::class, 'insert'])->name('car.car.insert');
    Route::get('/car/{id}', [CarController::class, 'edit'])->name('car.car.edit');
    Route::post('/car/update/{id}', [CarController::class, 'update'])->name('car.car.update');
    Route::get('/car/delete/{id}', [CarController::class, 'delete'])->name('car.car.delete');
    Route::get('/car/available/{id}', [CarController::class, 'available'])->name('car.car.available');
    Route::get('/car/rented/{id}', [CarController::class, 'rented'])->name('car.car.rented');


    //Motor
    Route::get('/bike/create', [BikeController::class, 'create'])->name('admin.bike.create');
    Route::get('/bike/index', [BikeController::class, 'index'])->name('admin.bike.index');
    Route::post('/bike/insert', [BikeController::class, 'insert'])->name('admin.bike.insert');
    Route::get('/bike/{id}', [BikeController::class, 'edit'])->name('admin.bike.edit');
    Route::post('/bike/update/{id}', [BikeController::class, 'update'])->name('admin.bike.update');
    Route::get('/bike/delete/{id}', [BikeController::class, 'delete'])->name('admin.bike.delete');
    Route::get('/bike/available/{id}', [BikeController::class, 'available'])->name('admin.bike.available');
    Route::get('/bike/rented/{id}', [BikeController::class, 'rented'])->name('admin.bike.rented');

    //Kategori Motor
    Route::get('/bike_type/index', [BikeTypeController::class, 'index'])->name('admin.bike_type.index');
    Route::post('/bike_type/insert', [BikeTypeController::class, 'insert'])->name('admin.bike_type.insert');
    Route::get('/bike_type/create', [BikeTypeController::class, 'create'])->name('admin.bike_type.create');
    Route::get('/bike_type/{id}', [BikeTypeController::class, 'edit'])->name('admin.bike_type.edit');
    Route::get('/bike_type/delete/{id}', [BikeTypeController::class, 'delete'])->name('admin.bike_type.delete');
    Route::post('/bike_type/update/{id}', [BikeTypeController::class, 'update'])->name('admin,bike_type.update');

    //camera
    Route::get('/camera/create', [CameraController::class, 'create'])->name('admin.camera.create');
    Route::get('/camera/index', [CameraController::class, 'index'])->name('admin.camera.index');
    Route::post('/camera/insert', [CameraController::class, 'insert'])->name('admin.camera.insert');
    Route::get('/camera/{id}', [CameraController::class, 'edit'])->name('admin.camera.edit');
    Route::post('/camera/update/{id}', [CameraController::class, 'update'])->name('admin.camera.update');
    Route::get('/camera/delete/{id}', [CameraController::class, 'delete'])->name('admin.camera.delete');
    Route::get('/camera/available/{id}', [CameraController::class, 'available'])->name('admin.camera.available');
    Route::get('/camera/rented/{id}', [CameraController::class, 'rented'])->name('admin.camera.rented');

    //testimoni
    Route::resource('testimoni', TestimoniController::class);
    Route::post('/testimoni/insert', [TestimoniController::class, 'insert'])->name('testimoni.insert');


});

