<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User Routes

Route::post('add/user',[UserController::class,'store'])->name('user.store');
Route::post('update/user',[UserController::class,'update'])->name('user.update');
Route::delete('delete/user/{id}',[UserController::class,'destroy'])->name('user.destroy');


//Permission Routes

Route::post('add/permission',[PermissionController::class,'store'])->name('store.permission');
Route::post('update/permission',[PermissionController::class,'update'])->name('permission.update');
Route::delete('delete/permission/{id}',[PermissionController::class,'destroy'])->name('destroy.permission');



//Cars Routes

Route::get('cars',[ApiController::class,'index']);
Route::post('register',[ApiController::class,'register']);
Route::delete('car/{id}',[ApiController::class,'destroy']);
Route::put('update/{id}',[ApiController::class,'update']);

Route::get('test',[ApiController::class,'test'])->name('test');

