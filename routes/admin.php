<?php

use App\Http\Controllers\Admin\{
    VaccineController,
    DashboardController,
    CrudController,
    DistrictController,
    DivisionController,
    HospitalController
};
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function () {

    # Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CrudController::class)->name('crud.')->prefix('crud')->group(function () {

        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{crud}', 'destroy')->name('destroy');
        Route::get('{crud}', 'show')->name('view');

        Route::post('{crud}', 'update')->name('update');
    });


    # Vaccine
    Route::prefix('vaccine')->name('vaccine.')->controller(VaccineController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{vaccine}', 'destroy')->name('destroy');
        Route::get('{vaccine}', 'show')->name('view');
        Route::post('{vaccine}', 'update')->name('update');
    });

    # Division
    Route::prefix('division')->name('division.')->controller(DivisionController::class)->group(function () {
        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{division}', 'destroy')->name('destroy');
        Route::get('{division}', 'show')->name('view');
        Route::post('{division}', 'update')->name('update');
    });

    # district
    Route::prefix('district')->name('district.')->controller(DistrictController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    # hospital
    Route::prefix('hospital')->name('hospital.')->controller(HospitalController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});
