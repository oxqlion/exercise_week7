<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentExtracurricularController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [StudentController::class,'index'])->name('index');

Route::get('/writer/{writer}', [StudentController::class, 'show'])->name('show');

Route::get('/weak', [StudentExtracurricularController::class, 'index'])->name('asd')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
