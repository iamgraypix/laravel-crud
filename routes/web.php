<?php

use App\Http\Controllers\BookController;
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

/*
/----------------------------
/ Common Resource Routes:
/----------------------------
/ index — Show all listings
/ show — Show single listing
/ create - Show form to create a new listing
/ store - Store new listing
/ edit - Show form to edit listing
/ update - Update listing
/ destroy - Delete listing
*/

Route::get('/', [BookController::class, 'index']);

Route::get('/create', [BookController::class, 'create']);

Route::get('/show/{id}', [BookController::class, 'show']);

Route::post('/store', [BookController::class, 'store']);

Route::get('/edit/{id}', [BookController::class, 'edit']);

Route::put('/update/{id}', [BookController::class, 'update']);

Route::delete('/delete/{id}', [BookController::class, 'destroy']);

