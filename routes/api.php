<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\EmployeeController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('start/meeting', [MeetingController::class, 'create_meeting']);
Route::get('show', [MeetingController::class, 'show']);
Route::post('employee', [EmployeeController::class, 'employees']);
Route::get('jobs', [EmployeeController::class, 'job']);
Route::post('addemp/{meeting}', [MeetingController::class, 'addEmployees']);
Route::get('tags', [MeetingController::class, 'tags']);
Route::get('emp/tags', [EmployeeController::class, 'addtags']);
Route::post('add/{employee}', [EmployeeController::class, 'add']);




