<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Homepage / Landing Page
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// Products and Services Page
Route::get('/products', function () {
    return Inertia::render('Products');
})->name('products');

// About Us Page
Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

// Contact Us Page
Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');
