<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', [AttendanceController::class, 'index'])->name('index');
Route::post('/complete', [AttendanceController::class, 'store'])->name('store');
