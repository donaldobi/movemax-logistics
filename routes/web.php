<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingEstimateController;
use App\Http\Controllers\ContactFormController;

// Static pages
Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

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