<?php

use App\Http\Controllers\Employer\CompanyController;
use App\Http\Controllers\Employer\DashboardController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\Employer\JobController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'employer', 'prefix' => 'employer', 'as' => 'employer.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [EmployerController::class, 'index'])->name('profile');
    Route::put('/update/{user}', [EmployerController::class, 'update'])->name('update');

    Route::group(['prefix' => 'auth'], function () {
        // change password
        Route::get('/change-password', [EmployerController::class, 'changePassword'])->name('changePassword');
        Route::post('/change-password', [EmployerController::class, 'changePasswordSubmit'])->name('changePasswordSubmit');
    });

    //Company
    Route::group(['prefix' => 'companies', 'as' => 'company.'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('index');
        Route::post('/store', [CompanyController::class, 'store'])->name('store');
        Route::put('/edit/{company}', [CompanyController::class, 'store'])->name('edit');
        Route::get('/show', [CompanyController::class, 'show'])->name('show');
        Route::get('/filter-city', [CompanyController::class, 'getCityByStateId'])->name('filterCity');
    });
    // jobs pages
    Route::group(['prefix' => 'jobs', 'as' => 'job.'], function () {
        Route::get('/', [JobController::class, 'index'])->name('index');
        Route::get('/create', [JobController::class, 'create'])->name('create');
        Route::post('/store', [JobController::class, 'store'])->name('store');
        Route::get('/show/{job}', [JobController::class, 'show'])->name('show');
        Route::get('/edit/{job}', [JobController::class, 'edit'])->name('edit');
        Route::post('/update/{job}', [JobController::class, 'update'])->name('update');
        Route::get('/delete/{job}', [JobController::class, 'delete'])->name('delete');
        Route::get('/filter-city', [CityController::class, 'getCityByStateName'])->name('filterCity');
        Route::get('/job-applications', [JobController::class, 'jopApplications'])->name('jopApplications');
        Route::get('/location-filter', [CityController::class, 'employerLocationFilter'])->name('employerLocationFilter');
        Route::get('/employer-job', [JobController::class, 'employerJobFilter'])->name('employerJobFilter');
    });
});
