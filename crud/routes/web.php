<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentController::class, 'index']);
Route::get('form/', [StudentController::class, 'form']);
Route::post('add/', [StudentController::class, 'addData']);
Route::get('view/{id}', [StudentController::class, 'view']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::post('update/{id}', [StudentController::class, 'update']);