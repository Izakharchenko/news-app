<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories/{category}/news', [CategoryController::class, 'news'])->name('categories.news');
Route::get('/news/categories/{category_id}', [NewsController::class, 'newsByCategory'])->name('news.category');
Route::apiResources([
    'categories' => CategoryController::class,
    'news' => NewsController::class
]);
