<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('excel', function () {
//    return view('excel ');
//});

//Route::get('export-user',[UserController::class,'exportUser'])->name('export-user');


Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
//

Route::get('/',[PageController::class,'index']);

Route::get('/uploadpage',[PageController::class,'uploadpage']);

Route::post('/uploadproduct',[PageController::class,'store']);


Route::get('/show',[PageController::class,'show']);

Route::get('/download/{file}',[PageController::class,'download']);

Route::get('/view/{is}',[PageController::class,'view']);
