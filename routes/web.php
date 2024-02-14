<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get("/", function(){
    return view("welcome");
});

Route::get("/admin", [UserController::class, "admin"])->middleware("can:isAdmin")  ;

// Registering process
Route::post("/register", [UserController::class, "register"])->name("user.register");
Route::post("/login", [UserController::class, "login"])->name("user.login");
Route::post("/logout", [UserController::class, "logout"])->middleware("loggedInUser");


// Todo Tasks: CRUD Operations
Route::get("/task", [TaskController::class, "index"])->name("tasks.index")->middleware("loggedInUser");
Route::post("/task", [TaskController::class, "store"])->name("tasks.store")->middleware("loggedInUser");
Route::get("/task/create", [TaskController::class, "create"])->name("tasks.create")->middleware("loggedInUser");
Route::get("/task/{task}/edit", [TaskController::class, "edit"])->name("tasks.edit")->middleware("loggedInUser");
Route::put("/task/{task}/update", [TaskController::class, "update"])->name("tasks.update")->middleware("loggedInUser");
Route::delete("/task/{task}/delete", [TaskController::class, "delete"])->name("tasks.delete")->middleware("loggedInUser");