<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormDataController;

Route::get('/', [HomeController::class, 'index_one_page'])
    ->name('index-one-page');

Route::get('/form-data', [FormDataController::class, 'index'])->name('form-data');
Route::post('/store', [FormDataController::class, 'store'])->name('form-data.store');

Route::get('/404', [PagesController::class, 'not_found'])
    ->name('404');

Route::fallback(function () {
    return view('pages.404');
});