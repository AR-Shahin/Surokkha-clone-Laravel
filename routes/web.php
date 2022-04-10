<?php


use App\Http\Controllers\Frontend\{
    HomeController,
    RegistrationController,
    TikaCardController,
    VaccineCertificate as FrontendVaccineCertificate,
    VaccineStatusController
};
use App\Http\Controllers\VaccineCertificate;
use App\Mail\FirstDoseMail;
use App\Mail\TestMail;
use App\Mail\UserRegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    $user = User::whereEmail('test@mail.com')->first();
    return view('pdf.tika_card_pdf', compact('user'));
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

# Tika Card

Route::controller(TikaCardController::class)->prefix('vaccine-card')->name('tika.')->group(function () {

    Route::get('/', 'index')->name('card');
    Route::post('/download', 'downloadVaccineCard')->name('download');
});


# Vaccine Certificate
Route::controller(FrontendVaccineCertificate::class)->prefix('vaccine-certificate')->name('certificate.')->group(function () {

    Route::get('/', 'index')->name('card');
    Route::post('/download', 'downloadVaccineCertificate')->name('download');
});


# Vaccine Status
Route::controller(VaccineStatusController::class)->prefix('vaccine-status')->name('status.')->group(function () {

    Route::post('/check', 'checkVaccineStatus')->name('check');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/admin_auth.php';
require __DIR__ . '/doctor.php';
require __DIR__ . '/admin.php';
