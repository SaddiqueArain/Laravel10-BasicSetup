<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\RegisterationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great! Test
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file',[NewController::class,'index'])->name('file.index');
Route::post('add/file',[NewController::class,'store'])->name('file.store');
Route::get('/download/{file}',[NewController::class,'download'])->name('file.download');

Route::get('/view/{id}',[NewController::class,'view'])->name('file.view');



