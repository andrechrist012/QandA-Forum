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

Auth::routes();

Route::get('/tableUser', [App\Http\Controllers\QnAController::class, 'masteruser']);
Route::delete('/removeUser/{id}', [App\Http\Controllers\QnAController::class, 'removeUser']);

Route::get('/createThread', [App\Http\Controllers\QnAController::class, 'createThread']);
Route::post('/create', [App\Http\Controllers\QnAController::class, 'create']);
Route::delete('/removeThread/{id}', [App\Http\Controllers\QnAController::class, 'removeThread']);

Route::get('/viewThread/{id}', [App\Http\Controllers\QnAController::class, 'viewThread']);

Route::get('/updateThread/{id}', [App\Http\Controllers\QnAController::class, 'updateThread']);
Route::put('/update/{id}', [App\Http\Controllers\QnAController::class, 'update']);

Route::post('/replyThread/{id}', [App\Http\Controllers\QnAController::class, 'replyThread']);
Route::delete('/deleteReply/{id}', [App\Http\Controllers\QnAController::class, 'deleteReply']);

Route::get('/', [App\Http\Controllers\QnAController::class, 'index'])->name('home');
