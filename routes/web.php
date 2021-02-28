<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\VehiculoController;

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

Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');



Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('propietario',[PropietarioController::class,'index'])->name('propietario.index');
Route::get('propietario/create',[PropietarioController::class,'create'])->name('propietario.create');
Route::post('propietario',[PropietarioController::class,'store'])->name('propietario.store');
Route::delete('propietario/{id}',[PropietarioController::class,'destroy'])->name('propietario.destroy');
Route::get('propietario/{id}/edit',[PropietarioController::class,'edit'])->name('propietario.edit');
Route::patch('propietario/update/{id}',[PropietarioController::class,'update'])->name('propietario.update');
Route::get('propietario/{id}',[PropietarioController::class,'show'])->name('propietario.show');

Route::get('conductor',[ConductorController::class,'index'])->name('conductor.index');
Route::get('conductor/create',[ConductorController::class,'create'])->name('conductor.create');
Route::post('conductor',[ConductorController::class,'store'])->name('conductor.store');
Route::delete('conductor/{id}',[ConductorController::class,'destroy'])->name('conductor.destroy');
Route::get('conductor/{id}/edit',[ConductorController::class,'edit'])->name('conductor.edit');
Route::patch('conductor/update/{id}',[ConductorController::class,'update'])->name('conductor.update');
Route::get('conductor/{id}',[ConductorController::class,'show'])->name('conductor.show');

Route::get('vehiculo',[VehiculoController::class,'index'])->name('vehiculo.index');
Route::get('vehiculo/create',[VehiculoController::class,'create'])->name('vehiculo.create');
Route::post('vehiculo',[VehiculoController::class,'store'])->name('vehiculo.store');
Route::delete('vehiculo/{id}',[VehiculoController::class,'destroy'])->name('vehiculo.destroy');
Route::get('vehiculo/{id}/edit',[VehiculoController::class,'edit'])->name('vehiculo.edit');
Route::patch('vehiculo/update/{id}',[VehiculoController::class,'update'])->name('vehiculo.update');
Route::get('vehiculo/{id}',[VehiculoController::class,'show'])->name('vehiculo.show');
