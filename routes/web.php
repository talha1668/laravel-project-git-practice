<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware;
Route::get('/', function () {
    return view('welcome');
});

    Route::get('/signup',[UserController::class,'createUser'])->name('register-user');
    Route::POST('/formsubmitted',[UserController::class,'signup'])->name('registered-user');
    Route::get('/login',[AuthController::class,'loginform'])->name('login');
    Route::post('/login',[AuthController::class,'login_auth'])->name('login_auth');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard', [UserController::class, 'showData'])->name('dashboard');
    Route::get('/buyer',[UserController::class,'phnbuyer'])->name('phnbuyer');
    Route::post('/buyer',[UserCOntroller::class,'getBuyerData'])->name('buyer_data');
    Route::get('/phone',function(){
        return view('phones');
    })->name('phones');
    
});