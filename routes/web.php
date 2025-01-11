<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contacts.index');
});

Route::get('/contact/{contact}/show', [ContactController::class, 'show'])->name('contacts.show');

Route::resource('contacts', ContactController::class);

