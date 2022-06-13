<?php

use App\Http\Controllers\CardGeneratorController;
use App\Http\Controllers\RandomColorController;
use App\Http\Controllers\SumCalculatorController;
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

Route::get('example1', RandomColorController::class);
Route::post('example2', SumCalculatorController::class);
Route::post('example3', CardGeneratorController::class);

Route::get('/', function () {
    return view('welcome');
});
