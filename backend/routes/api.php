<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("/teams", TeamController::class)->middleware("auth:sanctum");
Route::apiResource("/races", TeamController::class)->only(["index", "store", "show", "destroy"]);
Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::post("/login", [AuthController::class, "authenticate"])->name("authenticate");
