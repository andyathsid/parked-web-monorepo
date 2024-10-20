<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormAPIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth-google');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('callback-google');


Route::get('/email/verify/{id}/{hash}', function (Request $request) {
    $request->fulfill();

    return redirect('/profile')->with('message', 'Email Anda telah terverifikasi!');
})->middleware(['signed'])->name('verification.verify');

Route::post('/email/resend', [AuthController::class, 'resendVerificationEmail'])->name('verification.resend');



Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/history', [UserController::class, 'history'])->name('history');


    Route::get('/patient-info', [PatientController::class, 'index'])->name('patient-info');
    Route::get('/form-diagnosa', [PatientController::class, 'DiagnosaForm'])->name('form-diagnosa');
    Route::post('/patient-form', [FormController::class, 'pastientUpload'])->name('patient-form');
});

Route::get('/resources', [HomeController::class, 'Resources'])->name('resources');
// Route::get('/resources-detail', [HomeController::class, 'ResourcesDetail'])->name('resources-detail');
Route::get('/{id}', [HomeController::class, 'ResourcesDetail'])->name('detail');



Route::post('/coba', [FormController::class, 'coba'])->name('coba');
Route::get('/isi', [FormController::class, 'index'])->name('tabel');
Route::apiResource('api/form-API', FormAPIController::class);
