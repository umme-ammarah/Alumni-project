<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/', function () {
    return view('welcome');
});

// auth
// registration 
Route::view('/register', 'auth.registration');
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
// login
Route::view('/login', 'auth.login');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login');
// forget password
Route::get('/forgot-password', [CustomAuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [CustomAuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [CustomAuthController::class, 'resetPassword'])->name('password.update');




// Route for admin dashboard
Route::get('/admin/dashboard', [CustomAuthController::class, 'admin_dashboard'])->name('admin.dashboard');

// Route for student dashboard
Route::get('/student/dashboard', [CustomAuthController::class, 'student_dashboard'])->name('student.dashboard');
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');




