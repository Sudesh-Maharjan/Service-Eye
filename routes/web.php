<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;

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

Route::get('/services',  [ServicesController::class, 'servicesshow'])->name('services');
Route::get('/project', function () {
    return view('Project');
});
Route::get('/training', function () {
    return view('Training');
});
Route::get('/bloginside/{id}', [BlogController::class,"bloginside"])->name("blog.insideblog");
Route::get('/trainingcard', function () {
    return view('trainingcardraj');
});
Route::get('/blog', [BlogController::class,"blogshow"])->name("blog.blogshow");

Route::get("/addblog",[BlogController::class,"addblog"])->name("addblog");
Route::post("/storeblog",[BlogController::class,"store"])->name("blog.store");
Route::get("/showblog",[BlogController::class,"show"])->name("blog.show");


Route::get("/deleteblog/{id}",[BlogController::class,"delete"])->name("blog.delete");
Route::get("/editblog/{id}",[BlogController::class,"edit"])->name("blog.edit");


Route::post("/updateblog/{id}",[BlogController::class,"update"])->name("blog.update");

// team
Route::get("/team",[TeamController::class,"usershow"])->name("usershow");


Route::get('/', [ProjectController::class,'usershow'])->name('Homepage') ;

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

