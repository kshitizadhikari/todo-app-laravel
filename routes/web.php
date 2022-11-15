<?php

use App\Http\Controllers\TodoloListController;
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



Route::get('/', [TodoloListController::class, 'index']);
Route::post('/save-todo', [TodoloListController::class, 'saveTodo'])->name('saveTodo');
Route::get('/delete/{id}', [TodoloListController::class, 'delete']);
Route::get('/edit/{id}', [TodoloListController::class, 'edit']);
Route::post('/edit/', [TodoloListController::class, 'updateTodo'])->name('updateTodo');


