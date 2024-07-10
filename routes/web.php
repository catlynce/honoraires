<?php

use App\Http\Controllers\FeeDownload;
use App\Http\Controllers\FeePreview;
use App\Livewire\Info;
use App\Livewire\FeeAdd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/fee/create', FeeAdd::class)->name('fee.create');
Route::get('/fee/{fee}/preview', FeePreview::class)->name('fee.preview');
Route::get('/fee/{fee}/download', FeeDownload::class)->name('fee.download');

Route::get('/infos', Info::class)->name('info');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
