<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    //Registration
    Route::get('signup', [RegisterController::class, 'index'])->name('signup');
    Route::post('signup', [RegisterController::class, 'store'])->name('store');

    //Login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('loginUser');

    // TODO Need to be shift in global
    //user verification
    Route::post('verify-otp', [VerificationController::class, 'verifyOtp'])->name('verifyOtp');
    Route::get('email-verification/{email}', [VerificationController::class, 'verifyEmail'])->name('verifyEmail');

    Route::post('resend-otp', [OtpController::class, 'resendOtp'])->name('resendOtp');
    Route::post('resend-email', [OtpController::class, 'resendEmail'])->name('resendEmail');

    // user Password reset and forgot
    Route::get('forget-password', [ForgotPasswordController::class, 'forgetPassword'])->name('forgetPassword');
    Route::post('check-forgot-password', [ForgotPasswordController::class, 'checkForgotPassword'])->name('checkForgotPassword');
    Route::post('submit-forget-password', [ForgotPasswordController::class, 'submitForgetPassword'])->name('submitForgetPassword');
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'resetPassword'])->name('resetPassword');
    Route::post('password-reset', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('passwordResetSubmit');

    Route::post('/logout', [LogOutController::class, 'logout'])->name('logout');
});

// Front End Page View
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/job-list', [FrontendController::class, 'jobList'])->name('jobList');
Route::get('/job_details/{job}', [FrontendController::class, 'jobDetails'])->name('jobDetails');
// End Front Page view


Route::get('/privacy-policy', function () {
    return view('privacy_policy');
})->name('privacyPolicy');
