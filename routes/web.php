<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
Route::post('/tambah', [TaskController::class, 'tambah']);
Route::get('/hapus/{id}', [TaskController::class, 'hapus']);
Route::post('/update/{id}', [TaskController::class, 'update']);
