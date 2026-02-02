<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post("/login",[AuthController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function(){
Route::get("/home",[AuthController::class,'home'])->name('home');
Route::get('/logout',[AuthController::class,'logout'])->name("logout");
});