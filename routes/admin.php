<?php

use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\ProjectCatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrainingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/addservice',  [ServicesController::class, 'addservices'])->name('addservices');
Route::post('/storeservices',  [ServicesController::class, 'storeservices'])->name('storeservices');
Route::get('/showservices',  [ServicesController::class, 'adminservicesshow'])->name('showadminservices');
Route::get('/editservices/{id}',  [ServicesController::class, 'adminservicesedit'])->name('adminservicesedit');
Route::post('/updateservices/{id}',  [ServicesController::class, 'adminservicesupdate'])->name('adminservicesupdate');
Route::get('/deleteservices/{id}',  [ServicesController::class, 'deleteadminservices'])->name('adminservicesdelete');

// training
Route::get("/addtraining",[TrainingController::class,"addtraining"])->name("addtraining");
Route::post("/posttraining",[TrainingController::class,"storetraining"])->name("posttraining");
Route::get("/showtraining",[TrainingController::class,"showadmintraining"])->name("training.show");
Route::get("/updatetraining/{id}",[TrainingController::class,"updatetraining"])->name("training.update");
Route::post("/edittraining/{id}",[TrainingController::class,"edittraining"])->name("edittraining");
Route::get("/deletetraining/{id}",[TrainingController::class,"deletetraining"])->name("deletetraining");
Route::get("/addcourse",[CourseController::class,"create"])->name("courses.create");
Route::post("/storecourse",[CourseController::class,"store"])->name("courses.store");

// Team
Route::get('/teams/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/teams/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/teams', [TeamController::class,'show'])->name('teams.show');

Route::get('/teams/edit/{id}',[TeamController::class,'edit'])->name('teams.edit');
Route::post('/teams/{id}',[TeamController::class,'update'] )->name('teams.update');
Route::get('/teams/delete/{id}',[TeamController::class,'delete'] )->name('teams.delete');
// project
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/projects', [ProjectController::class,'show'])->name('project.show');
Route::get('/projects/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
Route::post('/projects/update/{id}',[ProjectController::class,'update'])->name('project.update');
Route::get('/projects/delete/{id}',[ProjectController::class,'delete'])->name('project.delete');
// client
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');

Route::get('courses/edit/{id}', [CourseController::class, 'edit'])->name('courses.edit');
Route::post('courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::get('/courses', [CourseController::class, 'adminshow'])->name('courses.show');

Route::get('/project-cat', [ProjectCatController::class, 'project_cat'])->name('project-cat.project_cat');
Route::post('/project-cat/store', [ProjectCatController::class, 'store'])->name('project-cat.store');
Route::delete('/project-cat/{projectCat}', [ProjectCatController::class, 'destroy'])->name('project-cat.destroy');


//Project
Route::get("/aproject", [PortfolioController::class, 'index'])->name("aproject");
Route::post("/addproject", [PortfolioController::class, 'addproject'])->name("addproject");
Route::get('/aproject/{id}', [PortfolioController::class, 'destroy'])->name('deleteproject');
Route::post("/updateproject/{id}",[PortfolioController::class,"updateproject"])->name("updateproject");
Route::get("/editaProject/{id}", [PortfolioController::class, 'editaProject'])->name("editaProject");

//Contact Us
Route::get("/showcontactus",[ContactController::class,'show_contactus'])->name("showcontactus");
Route::get("/deleteshowcontactus/{id}",[ContactController::class,'desletecontact'])->name("deleteshowcontactus");

