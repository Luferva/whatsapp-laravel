<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Contacts\ListContact;
use Illuminate\Support\Facades\Route;



/* Route::get('/') */


Route::get('/', function () {
    return view('dashboard');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('contacts')->group(function () {
        Route::get('/list', ListContact::class)->name('contacts.list');
    });
});

require __DIR__.'/auth.php';
