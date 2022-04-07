<?php

use App\Http\Controllers\Frontend\{
    HomeController
};
use Illuminate\Support\Facades\Route;



# Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('registration', 'registration')->name('registration');
    Route::get('status', 'status')->name('status');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin_auth.php';
require __DIR__ . '/admin.php';
