<?php

use App\Http\Controllers\Doctor\{DashboardController, UserController};
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

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth:doctor');


    # User
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('/', 'firstDose')->name('first-dose');
        Route::post('/fist-dose/{user}', 'firstDosePush')->name('first-dose-push');
        Route::get('{user}', 'show')->name('view');
        Route::get('first-dose-request/{user}', 'sendMailForFirstDose')->name('first-dose-request');
        Route::get('first-dose/users', 'firstDoseUsers')->name('first-dose-users');
        Route::delete('{hospital}', 'destroy')->name('destroy');
        Route::post('{hospital}', 'update')->name('update');
    });
});
