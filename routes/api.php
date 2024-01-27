<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Public Route
Route::post('register',[Authcontroller::class,'register']);
Route::post('login',[Authcontroller::class,'login']);
//Protect Route
Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::post('logout',[Authcontroller::class,'logout']);
    Route::resource('products',ProductController::class);
});