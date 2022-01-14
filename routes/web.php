<?php

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


Route::get('/table', [App\Http\Controllers\QnAController::class, 'masteruser']);

Auth::routes();

Route::get('/viewThread/{id}', [App\Http\Controllers\QnAController::class, 'viewThread']);
Route::post('/replyThread/{id}', [App\Http\Controllers\QnAController::class, 'replyThread']);
Route::delete('/deleteReply/{id}', [App\Http\Controllers\QnAController::class, 'deleteReply']);

Route::get('/', [App\Http\Controllers\QnAController::class, 'index'])->name('home');
