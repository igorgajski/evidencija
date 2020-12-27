<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Device_typeController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\User_deviceController;
use App\Http\Controllers\UserController;

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

Route::resource('roles', RoleController::class);
Route::resource('roles', CountryController::class);
Route::resource('roles', DepartmentController::class);
Route::resource('roles', Device_typeController::class);
Route::resource('roles', DeviceController::class);
Route::resource('roles', ManufacturerController::class);
Route::resource('roles', User_deviceController::class);
Route::resource('roles', UserController::class);
