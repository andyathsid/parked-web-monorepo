<?php

use App\Http\Controllers\FormAPIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/profile', [UserController::class, 'index'])->name('profile');
Route::get('/history', [UserController::class, 'history'])->name('history');

Route::get('/login', [LoginController::class, 'index'])->name('login');




Route::get('/patient-info', [PatientController::class, 'index'])->name('patient-info');
Route::get('/form-diagnosa', [PatientController::class, 'DiagnosaForm'])->name('form-diagnosa');
Route::get('/resources', [HomeController::class, 'Resources'])->name('resources');
Route::post('/patient-form', [FormController::class, 'pastientUpload'])->name('patient-form');





Route::post('/coba', [FormController::class, 'coba'])->name('coba');
Route::get('/isi', [FormController::class, 'index'])->name('tabel');
Route::apiResource('api/form-API', FormAPIController::class);
