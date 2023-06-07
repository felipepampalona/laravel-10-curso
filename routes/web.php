<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteControler;
use Illuminate\Support\Facades\Route;
use App\Enums\SupportStatus;

Route::get('/test', function () {
    dd(array_column(SupportStatus::cases(), 'name'));
});

Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/contato', [SiteControler::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});



