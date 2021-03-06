<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ApplicantImportController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/process', [HomeController::class, 'process'])->name('process');
    Route::resource('applicant', ApplicantController::class);
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::post('applicant-import', [ApplicantController::class,'importApplicant'])->name('applicant_import');
    Route::get('application-export',[ApplicantController::class,'exportApplicant'])->name('applicant_export');
    Route::post('applicant-delete',[ApplicantController::class,'deleteAll'])->name('applicant_all.delete');
});
