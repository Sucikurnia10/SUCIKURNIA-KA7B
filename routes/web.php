<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;

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

Route::get('/home', [HomeController::class,'home']);

Route::get('/About', [HomeController::class,'About']);

Route::get('contact', [HomeController::class,'contact']);

Route::get('suci', [HomeController::class,'index']);