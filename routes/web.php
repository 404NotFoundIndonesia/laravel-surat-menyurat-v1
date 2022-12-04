<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::prefix('transaction')->as('transaction.')->group(function() {
    Route::resource('incoming', \App\Http\Controllers\IncomingLetterController::class);
    Route::resource('outgoing', \App\Http\Controllers\OutgoingLetterController::class);
});

Route::prefix('agenda')->as('agenda.')->group(function() {
    Route::get('incoming', [\App\Http\Controllers\IncomingLetterController::class, 'agenda'])->name('incoming');
    Route::get('outgoing', [\App\Http\Controllers\OutgoingLetterController::class, 'agenda'])->name('outgoing');
});

Route::prefix('gallery')->as('gallery.')->group(function() {
    Route::get('incoming', [\App\Http\Controllers\LetterGalleryController::class, 'incoming'])->name('incoming');
    Route::get('outgoing', [\App\Http\Controllers\LetterGalleryController::class, 'outgoing'])->name('outgoing');
});

Route::prefix('reference')->as('reference.')->group(function() {
    Route::resource('classification', \App\Http\Controllers\ClassificationController::class)->except(['show', 'create', 'edit']);
    Route::resource('status', \App\Http\Controllers\LetterStatusController::class, [
        'name'
    ])->except(['show', 'create', 'edit']);
});

Route::get('/home', fn() => view('layout.main'));
