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

        Route::get('/', 'allUsers')->name('all');
        Route::get('show/{user}', 'show')->name('view');

        Route::get('/first-dose', 'firstDose')->name('first-dose');
        Route::post('/first-dose/{user}', 'firstDosePush')->name('first-dose-push');

        Route::get('/second-dose', 'secondDose')->name('second-dose');
        Route::post('/second-dose/{user}', 'secondDosePush')->name('second-dose-push');
    });
});
