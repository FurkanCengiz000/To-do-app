<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index'])->name('home');
Route::post('/', [TaskController::class, 'store'])->name('store');
Route::delete('/{task}', [TaskController::class, 'destroy'])->name('destroy');
Route::get('/edit/{task:slug}', [TaskController::class, 'edit'])->name('edit');
Route::put('/edit/{task}', [TaskController::class, 'update'])->name('update');
Route::put('/{task}', [TaskController::class, 'checkboxUpdate'])->name('checkboxUpdate');
