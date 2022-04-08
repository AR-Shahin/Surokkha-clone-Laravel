<?php

use App\Http\Controllers\Frontend\{
    HomeController,
    RegistrationController
};
use App\Mail\FirstDoseMail;
use App\Mail\TestMail;
use App\Mail\UserRegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {

    // Mail::to('ar@mail.com')->send(new TestMail);
    // return new TestMail;
    return new FirstDoseMail(User::first());
});

# Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('status', 'status')->name('status');
});

# Registration
Route::controller(RegistrationController::class)->group(function () {
    Route::get('registration', 'registration')->name('handle.registration');
    Route::post('registration', 'handleRegistration')->name('registration');
    Route::get('division-districts/{division}', 'districtDivisions')->name('div.dis');
    Route::get('district-hospitals/{district}', 'districtHospitals')->name('dis.hos');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin_auth.php';
require __DIR__ . '/doctor_auth.php';
require __DIR__ . '/admin.php';
