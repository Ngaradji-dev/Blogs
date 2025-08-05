<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', [SiteController::class, 'home'])->name('home');

// Pages statiques
Route::get('/create', [SiteController::class, 'create'])->name('site.create');
Route::get('/edit', [SiteController::class, 'edit'])->name('site.edit');
Route::get('/show', [SiteController::class, 'show'])->name('site.show');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');

// Routes Articles
Route::prefix('article')->name('article.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('show'); // pour le bouton "voir"
    Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [ArticleController::class, 'update'])->name('update');
    Route::delete('/{article}/delete', [ArticleController::class, 'destroy'])->name('delete');

});


// Routes Catégories
Route::prefix('categorie')->name('categorie.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{category}/update', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{category}/delete', [CategoryController::class, 'destroy'])->name('delete');
});
