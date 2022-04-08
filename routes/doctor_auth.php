<?php

use App\Http\Controllers\Doctor\{DashboardController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Auth\{
    AuthenticatedSessionController
};


Route::prefix('doctor')->name('doctor.')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:doctor')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:doctor')->name('auth');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:doctor')
        ->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
