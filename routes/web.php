<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShippingEstimateController;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
// Route::post('/calculate-shipping', [ShippingController::class, 'calculate'])->name('shipping.calculate');

Route::post('/shipping-estimate', [ShippingEstimateController::class, 'store'])->name('shipping.estimate');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.form');