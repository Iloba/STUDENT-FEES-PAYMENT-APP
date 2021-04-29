<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentLogin;

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
    return view('index');
});

//Register Student
Route::any('/register-student', [StudentController::class, 'store'])->name('register-student');

//login student
Route::any('/student-login', [StudentLogin::class, 'loginStudent'])->name('student-login');

//Student Profile
Route::any('/profile', [StudentLogin::class, 'profile'])->name('student-profile');

Route::view('/slogin', 'student-login');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
