<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\ProductController ;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register',[PassportAuthController::class,'register']);
Route::post('login',[PassportAuthController::class,'login']);

Route::middleware(['auth:api'])->group(function () {
    
    Route::get('userinfo',[PassportAuthController::class,'userInfo']);
    Route::resource('products',ProductController::class);

});