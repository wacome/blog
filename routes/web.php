<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Articles
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);
Route::put('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);

// Tags
Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::post('/tags', [TagController::class, 'store']);
Route::get('/tags/{tag}', [TagController::class, 'show']);
Route::get('/tags/{tag}/edit', [TagController::class, 'edit']);
Route::put('/tags/{tag}', [TagController::class, 'update']);
Route::delete('/tags/{tag}', [TagController::class, 'destroy']);

// Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

// Archives
Route::get('/archives', [ArchiveController::class, 'index']);
Route::get('/archives/create', [ArchiveController::class, 'create']);
Route::post('/archives', [ArchiveController::class, 'store']);
Route::get('/archives/{archive}', [ArchiveController::class, 'show']);
Route::get('/archives/{archive}/edit', [ArchiveController::class, 'edit']);
Route::put('/archives/{archive}', [ArchiveController::class, 'update']);
Route::delete('/archives/{archive}', [ArchiveController::class, 'destroy']);
