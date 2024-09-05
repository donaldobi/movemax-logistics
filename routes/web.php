<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingEstimateController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Auth\LoginController;

// Static pages
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/contact', [ContactFormController::class, 'show'])->name('contact');

// Custom routes for sections
Route::get('/about-us', function () {
    return redirect()->route('index')->withFragment('about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return redirect()->route('index')->withFragment('our-services');
})->name('our-services');

Route::get('/why-us', function () {
    return redirect()->route('index')->withFragment('why-us');
})->name('why-us');

// Form submissions
Route::post('/shipping-estimate', [ShippingEstimateController::class, 'store'])->name('shipping.estimate');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.form');

// Admin routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');