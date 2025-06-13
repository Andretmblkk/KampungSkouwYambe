<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/potensi', function () {
    return view('potensi');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kontak', [ContactController::class, 'sendEmail'])->name('contact.send');
