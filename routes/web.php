<?php

use App\Http\Controllers\FormAPIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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
Route::get('/patient-info', [HomeController::class, 'patient'])->name('patient-info');
Route::get('/form-diagnosa', [HomeController::class, 'DiagnosaForm'])->name('form-diagnosa');
Route::post('/patient-form', [FormController::class, 'pastientUpload'])->name('patient-form');
Route::post('/coba', [FormController::class, 'coba'])->name('coba');
Route::get('/isi', [FormController::class, 'index'])->name('tabel');
Route::apiResource('api/form-API', FormAPIController::class);
