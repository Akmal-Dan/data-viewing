<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController; // Import the AttendanceController

Route::get('/', function () {
    return view('welcome');
});

// New routes for attendance form and display
Route::get('/attendance/form', [AttendanceController::class, 'showForm']);
Route::post('/attendance/show', [AttendanceController::class, 'showAttendance']);
