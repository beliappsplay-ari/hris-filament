<?php

use App\Http\Controllers\ApiEmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/employee/get', [ApiEmployeeController::class,'get'])->middleware(['client']);
Route::post('/employee/create', [ApiEmployeeController::class,'create'])->middleware(['client']);
Route::post('/employee/generateEmpno', [ApiEmployeeController::class,'generateEmpno'])->middleware(['client']);
Route::post('/employee/update', [ApiEmployeeController::class,'update'])->middleware(['client']);
