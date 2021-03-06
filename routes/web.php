<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentLogin;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;

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
})->middleware('AlreadyLoggedIn');

//Register Student
Route::any('/register-student', [StudentController::class, 'store'])->name('register-student');

//login student
Route::any('/student-login', [StudentLogin::class, 'loginStudent'])->name('student-login');

//Student Profile
Route::any('/profile', [StudentLogin::class, 'profile'])->name('student-profile')->middleware('isLogged');

//pay School fees
Route::any('/profile/pay-fees', [FeesController::class, 'payfees'])->name('pay-fees')->middleware('isLogged');

//Student Logout
Route::any('/student-logout', [StudentLogin::class, 'logout'])->name('student-logout');



Route::group(['prefix' => '/profile/pay-fees', 'middleware' => 'isLogged'], function(){

    Route::post('/payment/{id}', [PaymentController::class, 'paynow'])->name('pay.now');
    Route::post('/payment-half/{id}', [PaymentController::class, 'payhalf'])->name('pay.half');
    Route::post('/payment-quarter/{id}', [PaymentController::class, 'payquarter'])->name('pay.quarter');
});




//List All Students
Route::get('/home/students', [StudentController::class, 'index'])->name('students-list')->middleware('auth');

//Show individual Student
Route::get('/home/students/{id}', [StudentController::class, 'show'])->name('student-detail');

//Edit Student
Route::get('/home/students/{id}/edit', [StudentController::class, 'edit'])->name('edit-student')->middleware('auth');

//Update Student
Route::post('/home/students/{id}/update', [StudentController::class, 'update'])->name('update-student')->middleware('auth');

//Delete Student
Route::any('/home/students/{id}/delete', [StudentController::class, 'destroy'])->name('delete-student')->middleware('auth');

Route::view('/slogin', 'student-login')->name('slogin')->middleware('AlreadyLoggedIn');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
