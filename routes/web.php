<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
