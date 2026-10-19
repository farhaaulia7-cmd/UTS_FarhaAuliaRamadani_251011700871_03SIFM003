<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('page.home');
});


Route::get('/', [TokoController::class, 'home']);
Route::get('/catalog', [CatalogController::class, 'index'])->name('plant.index');
Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('plant.show');
Route::get('/about', [TokoController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact', 'index']);

Route::get('/about', function () {
    return view('page.about');
});
