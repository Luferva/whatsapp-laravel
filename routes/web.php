<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Contacts\ListContact;
use App\Livewire\Messages\WhatsappMessages;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::prefix('contacts')->group(function () {
        Route::get('/list', ListContact::class)->name('contacts.list');
    });

    Route::prefix('whatsapp')->group(function () {
        Route::get('/messages', WhatsappMessages::class)->name('whatsapp.messages');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
