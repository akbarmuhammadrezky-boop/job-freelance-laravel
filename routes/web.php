<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/jobs', [PageController::class, 'jobs'])->name('jobs.index');

Route::get('/jobs/entry-level', function () {
// entry level jobs
    return view('jobs-entry-level'); 
})->name('jobs.entry-level');

// micro jobs
Route::get('/jobs/micro-jobs', function () {
    return view('jobs-micro');
})->name('jobs.micro');

// virtual jobs
Route::get('/jobs/virtual-jobs', function () {
    return view('jobs-virtual'); 
})->name('jobs.virtual');

// writing jobs
Route::get('/jobs/writing-jobs', function () {
    return view('jobs-writing');
})->name('jobs.writing');

// testing jobs
Route::get('/jobs/testing-jobs', function () {
    return view('jobs-testing');
})->name('jobs.testing');

// designing jobs
Route::get('/jobs/designing-jobs', function () {
    return view('jobs-designing'); 
})->name('jobs.designing');

// marketing jobs
Route::get('/jobs/marketing-jobs', function () {
    return view('jobs-marketing');
})->name('jobs.marketing');

// managerial jobs
Route::get('/jobs/managerial-jobs', function () {
    return view('jobs-managerial');
})->name('jobs.managerial');

// developer jobs
Route::get('/jobs/developer-jobs', function () {
    return view('jobs-developer'); 
})->name('jobs.developer');

// finance jobs
Route::get('/jobs/finance-jobs', function () {
    return view('jobs-finance'); 
})->name('jobs.finance');

// coaching jobs
Route::get('/jobs/coaching-jobs', function () {
    return view('jobs-coaching'); 
})->name('jobs.coaching');

// other jobs
Route::get('/jobs/other-jobs', function () {
    return view('jobs-other');
})->name('jobs.other');

// Route detail job
Route::get('/jobs/{id}', [PageController::class, 'jobDetail'])->name('jobs.show');

// Dashboard klien & freelancer
Route::get('/dashboard/client', [PageController::class, 'clientDashboard'])->name('dashboard.client');
Route::get('/dashboard/freelancer', [PageController::class, 'freelancerDashboard'])->name('dashboard.freelancer');

// Profil pengguna
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// resource/views/canddates.blade.php
Route::get('/candidates', function () {
    return view('candidates-list'); 
})->name('candidates.index');

// resource/views/apply.blade,php
Route::get('/apply', function () {
    return view('apply'); 
})->name('apply');

// resources/views/packages.blade.php
Route::get('/packages', function () {
    return view('packages');
})->name('packages.index');

// resources/views/post-job.blade.php
Route::get('/post-job', function () {
    return view('post-job');
})->name('jobs.create');