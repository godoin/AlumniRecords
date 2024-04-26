<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::group(['middleware' => ['guest']], function() {
        Route::get('/', [LoginController::class, 'landing'])->name('welcome');

        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        # Records
        Route::get('/records', [AlumniController::class, 'index'])->name('records');
        Route::get('/add-record', [AlumniController::class, 'add_record'])->name('add_record');
        Route::get('/view-record/{id}', [AlumniController::class, 'view']);
        Route::delete('/delete-record/{id}', [AlumniController::class, 'destroy']);

        # Chapters
        Route::get('/chapter', [ChapterController::class, 'index'])->name('chapters');
        Route::post('/add-chapter/{id}', [ChapterController::class, 'store'])->name('add-chapter');
        Route::patch('/update-chapter/{id}', [ChapterController::class, 'update'])->name('update-chapter');
        Route::delete('/delete-chapter/{id}', [ChapterController::class, 'destroy'])->name('delete-chapter');

        # Other Routes
        Route::get('/alumnidetails', function () {
            return view('staff.alumnidetails');
        })->name('alumnidetails');

        Route::get('/accountpage', function () {
            return view('staff.accountpage');
        })->name('accountpage');


        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});


