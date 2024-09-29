<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

Route::get('lang/{locale}', function ($locale) {
    $supportedLocales = ['en', 'ar'];

    if (in_array($locale, $supportedLocales)) {
        config(['app.fallback_locale' => $locale]);
        Log::info('Fallback Locale changed to: ' . config('app.fallback_locale'));
    } else {
        Log::warning('Unsupported locale: ' . $locale);
    }

    return redirect()->back();
});



route::get('/', [HomeController::class, 'index']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    route::get('/home', [AdminController::class, 'index']);
    route::get('/category_page', [AdminController::class, 'category_page']);
    route::post('/add_category', [AdminController::class, 'add_category']);
    route::get('/cat_delete/{id}', [AdminController::class, 'cat_delete']);
    route::get('/edit_delete/{id}', [AdminController::class, 'edit_category']);
    route::post('/update_category/{id}', [AdminController::class, 'update_category']);
    route::get('/add_book', [AdminController::class, 'add_book']);
    route::get('/show_books', [AdminController::class, 'show_books']);
    route::post('/store_book', [AdminController::class, 'store_book']);
    route::get('/book_delete/{id}', [AdminController::class, 'book_delete']);
    route::get('/edit_book/{id}', [AdminController::class, 'edit_book']);
    route::post('/update_book/{id}', [AdminController::class, 'update_book']);
    route::get('/book_details/{id}', [HomeController::class, 'book_details']);
    route::match(['get', 'post'], '/borrow_books/{id}', [HomeController::class, 'borrow_books']);
    route::get('/borrow_request', [AdminController::class, 'borrow_request']);
    route::get('/accept_borrow/{id}', [AdminController::class, 'accept_borrow']);
    route::get('/deny_borrow/{id}', [AdminController::class, 'deny_borrow']);
    route::get('/explore', [HomeController::class, 'explore']);
    route::get('/search', [HomeController::class, 'search']);
    route::get('/cat_search/{id}', [HomeController::class, 'cat_search']);

});

