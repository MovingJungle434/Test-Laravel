<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\meinController;
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

Route::get("/", [meinController::class,"mein"]);
Route::resource('/book', BooksController::class);

