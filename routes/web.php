<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\WorkController;



// 出勤情報画面
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance/confirm', [AttendanceController::class, 'confirm'])->name('attendance.confirm');
Route::post('/attendance/complete', [AttendanceController::class, 'complete'])->name('attendance.complete');

// 現場登録画面
Route::get('/works', [WorkController::class, 'index'])->name('works.index');
Route::post('/works/confirm', [WorkController::class, 'confirm'])->name('works.confirm');
Route::post('/works/complete', [WorkController::class, 'complete'])->name('works.complete');
