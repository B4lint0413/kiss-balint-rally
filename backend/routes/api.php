<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/races", [RaceController::class, "index"]);
Route::get("/races/{race}", [RaceController::class, "show"]);
Route::get("/teams", [TeamController::class, "index"]);
Route::get("/teams/{teams}", [TeamController::class, "show"]);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource("/races", RaceController::class)->only(["store", "destroy", "update"]);
    Route::apiResource("/teams", TeamController::class)->only(["store", "destroy"]);
});
Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::post("/login", [AuthController::class, "authenticate"])->name("authenticate");
