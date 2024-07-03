<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\WineController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('website.components.about');
// });
Route::get('/', [MainController::class, 'index'])->name('website.index.main');
Route::get('/about', [MainController::class, 'about'])->name('website.index.about');
Route::get('/wines', [MainController::class, 'wines'])->name('website.index.wines');
Route::get('/wines/{id}', [MainController::class, 'showWines'])->name('website.show.wines');
Route::get('/gallery', [MainController::class, 'gallery'])->name('website.index.gallery');
Route::get('/news/{id}', [MainController::class, 'showNews'])->name('website.show.news');
Route::get('locale/{lang}', [LocalizationController::class, 'setLang']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('index.blog');
    Route::post('/admin/add-blog', [BlogController::class, 'store'])->name('store.blog');
    Route::put('/admin/update-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::delete('/admin/delete-blog/{id}', [BlogController::class, 'destroy'])->name('destroy.blog');

    Route::get('/admin/wines', [WineController::class, 'index'])->name('index.wine');
    Route::post('/admin/add-wine', [WineController::class, 'store'])->name('store.wine');
    Route::put('/admin/update-wine/{id}', [WineController::class, 'update'])->name('update.wine');
    Route::delete('/admin/delete-wine/{id}', [WineController::class, 'destroy'])->name('destroy.wine');

    Route::get('/admin/galeries', [GalleryController::class, 'index'])->name('index.gallery');
    Route::post('/admin/add-galery', [GalleryController::class, 'store'])->name('store.gallery');
    Route::delete('/admin/delete-galery/{id}', [GalleryController::class, 'destroy'])->name('destroy.gallery');

    Route::get('/admin', [ParameterController::class, 'index'])->name('index.parameter');
    Route::get('/dashboard', [ParameterController::class, 'index'])->name('index.parameter');
    Route::get('/admin/parameters', [ParameterController::class, 'index'])->name('index.parameter');
    Route::put('/admin/update-parameters', [ParameterController::class, 'update'])->name('update.parameter');
});
