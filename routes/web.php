<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index_one_page'])
    ->name('index-one-page');

Route::get('/about', [PagesController::class, 'about'])
    ->name('about');

Route::get('/services', [PagesController::class, 'services'])
    ->name('services');

Route::get('/services-details', [PagesController::class, 'services_details'])
    ->name('services-details');

Route::get('/team', [PagesController::class, 'team'])
    ->name('team');

Route::get('/team-details', [PagesController::class, 'team_details'])
    ->name('team-details');

Route::get('/portfolio', [PagesController::class, 'portfolio'])
    ->name('portfolio');

Route::get('/portfolio-details', [PagesController::class, 'portfolio_details'])
    ->name('portfolio-details');

Route::get('/case-single', [PagesController::class, 'case_single'])
    ->name('case-single');

Route::get('/404', [PagesController::class, 'not_found'])
    ->name('404');

Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');

Route::get('/blog-details', [PagesController::class, 'blog_details'])
    ->name('blog-details');

Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
});