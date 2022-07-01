<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\CarController;

##################### Rotas Auxiliares ##############

Route::get('/', function () { return view('auth.login');});
Route::get('/dashboard', function () { return view('cars.allCars'); })->middleware(['auth'])->name('dashboard');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/admin', function () { return view('Adm.adm');})->name('admin');
##################### Users #########################

Route::get('/user', [CarController::class, 'index'])->name('car');
Route::get('/user', [CarController::class, 'create'] )->name('createCar');
Route::post('/user', [CarController::class, 'store'] )->name('storeCar');
Route::post('/user/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('/user/{id}', [CarController::class, 'show'] )->name('showCar');
Route::delete('/user/{id}', [CarController::class, 'destroy'])->name('deleteCar');

##################### Car #########################

Route::get('/car', [CarController::class, 'index'])->name('car');
Route::get('/car', [CarController::class, 'create'] )->name('createCar');
Route::post('/car', [CarController::class, 'store'] )->name('storeCar');
Route::post('/car/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('/car/{id}', [CarController::class, 'show'] )->name('showCar');
Route::delete('/car/{id}', [CarController::class, 'destroy'])->name('deleteCar');

##################### Admin #########################

Route::get('/car', [CarController::class, 'index'])->name('car');
Route::get('/car', [CarController::class, 'create'] )->name('createCar');
Route::post('/car', [CarController::class, 'store'] )->name('storeCar');
Route::post('/car/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('/car/{id}', [CarController::class, 'show'] )->name('showCar');
Route::delete('/car/{id}', [CarController::class, 'destroy'])->name('deleteCar');

######################################################


require __DIR__.'/auth.php';
