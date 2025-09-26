<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index_one_page'])->name('index-one-page');

Route::get('/form-data', [FormDataController::class, 'index'])->name('form-data');
Route::post('/store', [FormDataController::class, 'store'])->name('form-data.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-action', [LoginController::class, 'login'])->name('login.action');

Route::get('/dashboard-admin',[AdminController::class, 'index'])->name('dashboard-admin');
Route::get('/data-table', [AdminController::class, 'dataTable'])->name('data-table');
Route::get('/export-excel', [AdminController::class, 'exportExcelWithImages']);
Route::get('/print-data', [AdminController::class, 'printData']);
Route::get('/export-pdf', [AdminController::class, 'exportPdf']);