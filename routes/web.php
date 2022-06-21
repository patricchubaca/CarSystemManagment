<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\CarController;

##################### Rotas Auxiliares ##############

Route::get('/', function () { return view('auth.login');});
Route::get('/dashboard', function () { return view('cars.allCars'); })->middleware(['auth'])->name('dashboard');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

##################### Chamadas de Views ##############

Route::get('/newCar', [CarController::class, 'create'] )->name('newCar');

##################### Car #########################


Route::get('/car', [CarController::class, 'index'])->name('car');
Route::post('/car', [CarController::class, 'store'] )->name('createCar');
Route::post('/car/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('/car/{id}', [CarController::class, 'show'] )->name('showCar');
Route::delete('/car/{id}', [CarController::class, 'destroy'])->name('deleteCar');

######################################################

require __DIR__.'/auth.php';
