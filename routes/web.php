<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FieldController;
Route::get("/login",[AuthController::class,"auth"])->name("login");
Route::post("/login",[AuthController::class,"logIn"])->name("checkLogin");
Route::get("/register",[AuthController::class,"registerForm"])->name("register");
Route::post("/register",[AuthController::class,"register"])->name("checkRegister");
Route::get("/dashboard",[DashboardController::class,'index'])
->name("dashboard")
->middleware("auth");
Route::resource("/filed",FieldController::class)
->middleware("auth");