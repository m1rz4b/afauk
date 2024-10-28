<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('who-we-are', [HomeController::class, 'who_we_are']);
Route::get('reviews', [HomeController::class, 'reviews']);
Route::get('success-stories', [HomeController::class, 'success_stories']);
Route::get('team', [HomeController::class, 'team']);
Route::get('student-admission', [HomeController::class, 'student_admission']);
Route::get('visa-processing', [HomeController::class, 'visa_processing']);
Route::get('universities', [HomeController::class, 'universities']);
Route::get('courses', [HomeController::class, 'courses']);
Route::get('campus', [HomeController::class, 'campus']);
Route::get('become-agent', [HomeController::class, 'become_agent']);
Route::get('jobs', [HomeController::class, 'jobs']);
Route::get('news', [HomeController::class, 'news']);