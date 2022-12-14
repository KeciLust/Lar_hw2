<?php

use App\Http\Controllers\TodosController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/todo', [TodosController::class, 'index'])->name('home');
Route::get('/todo/create', [TodosController::class, 'create']);
Route::post('/todo', [TodosController::class, 'store'])->name('todo_store');
Route::get('/todo/{todo}', [TodosController::class, 'detail']);
