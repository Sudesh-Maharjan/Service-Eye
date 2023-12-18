<?php

use App\Http\Controllers\ContactController;
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

Route::get('/bloginside', function () {
    return view('bloginside');
});

Route::get('/trainingcard', function () {
    return view('trainingcardraj');
});

Route::get('/blog', function () {
    return view('banner');
});

Route::get('/', function () {
    return view('Homepage');
})->name('Homepage') ;

Route::get('/bloginside', function () {
    return view('bloginside');
})->name('bloginside') ;

Route::get('/test', function () {
    return view('test');
})->name('test') ;

//Contact Us
Route::get("/contactus",[ContactController::class,'add_contactus'])->name("contactus");
Route::get("/postcontactus",[ContactController::class,'post_contactus'])->name("postcontactus");
Route::get("/showcontactus",[ContactController::class,'show_contactus'])->name("showcontactus");
Route::get("/deleteshowcontactus/{id}",[ContactController::class,'desletecontact'])->name("deleteshowcontactus");

