<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MicrositeController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\PasswordResetController;

// Home
Route::get('/', [HomepageController::class, 'index'])->name('welcome');
Route::get('kebijakan-privasi', [HomepageController::class, 'kebijakanPrivasi'])->name('kebijakan-privasi');
Route::get('syarat-ketentuan', [HomepageController::class, 'syaratKetentuan'])->name('syarat-ketentuan');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'blogDetail'])->name('blog-detail');


// Auth
Route::get('login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('register', [AuthController::class, 'register'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('gmail.redirect');

Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('gmail.callback');

// Microsite
Route::get('dashboard', [MicrositeController::class, 'showMicrositeForm'])->middleware('auth')->name('cek-link');
Route::post('dashboard', [MicrositeController::class, 'createMicrosite'])->middleware('auth');
Route::get('/{microsite}', [MicrositeController::class, 'index'])->name('microsite.index');
Route::delete('/microsite/{id}', [MicrositeController::class, 'deleteMicrosite'])->name('microsite.delete');


// Dashboard
Route::get('dashboard/edit-link/{microsite}', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard.edit-link');
Route::put('edit-link/{id}', [DashboardController::class, 'editLink'])->middleware('auth')->name('edit-link');
Route::delete('delete-link/{id}', [DashboardController::class, 'deleteLink'])->middleware('auth')->name('delete-link');
Route::post('microsites/edit-link', [DashboardController::class, 'store'])->name('links.store');
Route::post('/links/reorder', [DashboardController::class, 'reorder'])->name('links.reorder');
Route::get('dashboard/personalization/{microsite}', [DashboardController::class, 'showPersonalization'])->middleware('auth')->name('dashboard.personalization');
Route::post('dashboard/personalization/{id}', [DashboardController::class, 'editPersonalization'])->middleware('auth')->name('dashboard.personalization');
Route::get('dashboard/account/', [DashboardController::class, 'showAccount'])->middleware('auth')->name('dashboard.account');
Route::post('dashboard/account/edit-acount', [DashboardController::class, 'editAccount'])->middleware('auth')->name('edit-acount');
Route::post('dashboard/account/edit-password', [DashboardController::class, 'editPassword'])->middleware('auth')->name('edit-password');

Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.request');
Route::post('password/reset', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class, 'showNewPasswordForm'])->name('password.reset');
Route::post('password/reset/{token}', [PasswordResetController::class, 'updatePassword'])->name('password.update');
