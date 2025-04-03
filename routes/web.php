<?php

use App\Http\Controllers\ExportPdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExportPdfController::class, 'index'])->name('data.index');
Route::post('/store', [ExportPdfController::class, 'store'])->name('data.store');
Route::delete('/destroy/{id}', [ExportPdfController::class, 'destroy'])->name('data.destroy');
