<?php

use App\Http\Controllers\Jobseeker\DashboardController;
use App\Http\Controllers\Jobseeker\JobseekerController;
use App\Http\Middleware\Jobseeker;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => Jobseeker::class, 'prefix' => 'jobseeker', 'as' => 'jobseeker.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [JobseekerController::class, 'index'])->name('profile');
    Route::post('/update/{user}', [JobseekerController::class, 'update'])->name('update');
    Route::get('/show-profile/{id}', [JobseekerController::class, 'show'])->name('show');
    Route::get('/appliedJob', [JobseekerController::class, 'appliedJob'])->name('appliedJob');
    Route::get('/saveJob', [JobseekerController::class, 'saveJob'])->name('saveJob');
    Route::get('/filterCity', [JobseekerController::class, 'filterCity'])->name('filterCity');
    Route::post('/update-profile-pic/{user}', [JobseekerController::class, 'updateProfilePic'])->name('updateProfilePic');
    Route::post('/save-resume', [JobseekerController::class, 'saveResume'])->name('saveResume');
    Route::get('/load-basic-details-modal', [JobseekerController::class, 'loadBasicDetailsModal'])->name('loadBasicDetailsModal');
    Route::get('/delete-resume', [JobseekerController::class, 'deleteResume'])->name('deleteResume');

    Route::group(['prefix' => 'auth'], function () {
        // change password
        Route::get('/change-password', [JobseekerController::class, 'changePassword'])->name('changePassword');
        Route::post('/change-password-submit', [JobseekerController::class, 'changePasswordSubmit'])->name('changePasswordSubmit');
    });
});
