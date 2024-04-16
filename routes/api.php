<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\employeeController;

route::get('/employees', [App\Http\Controllers\employeeController::class, 'index']);
route::post('/addEmployee',[employeeController::class,'addEmployee']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
