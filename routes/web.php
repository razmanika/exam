<?php

use App\Http\Controllers\AppController;
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

Route::get('/home', [AppController::class, 'main'])->name('main');

Route::get('/applicants', [AppController::class, 'getApplicant'])->name('get.applicant');

Route::get('/applicants/{applicants}', [AppController::class, 'getApplicant'])->name('all.applicant');

Route::get('/applicant/{applicants}/edit', [AppController::class, 'appEdit'])->name('app.Edit');

Route::put('/applicant/{applicants}/update', [AppController::class, 'appUpdate'])->name('app.Update');

