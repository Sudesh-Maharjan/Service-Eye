<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/services',  [ServicesController::class, 'showservices'])->name('services');
Route::get('/project', function () {
    return view('Project');
});
Route::get('/training', function () {
    return view('Training');
});
