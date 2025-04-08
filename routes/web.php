<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/form', function () {
    return view('components.form');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
