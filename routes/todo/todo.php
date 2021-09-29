<?php

use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\MessageBag;

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


// add new task and save in database
Route::get('/', [TodoController::class , 'addtask'])->name('add new task'); //form of task
Route::post('/', [TodoController::class , 'savetask'])->name('savetask');//buttom of add new task


// list all data
Route::get('/show', [TodoController::class , 'listdata'])->name('show'); //form of task


//delete data
Route::get('/delete/{taskID}', [TodoController::class , 'deleteTask'])->name('delete'); //form of task


//update data
Route::get('/update/{taskID}', [TodoController::class , 'updateTask'])->name('update'); //form of update task
Route::post('/update/{taskID}', [TodoController::class , 'saveupdateTask'])->name('save update'); //form of update task
