<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/{destination}/show', [WelcomeController::class, 'show'])->name('wisata.show');
Route::get('/pages-visitor/category', [WelcomeController::class, 'category'])->name('halaman.category');
Route::get('/pages-visitor/category/{id}/detail', [WelcomeController::class, 'categoryDetail'])->name('halaman.category.detail');
Route::get('/pages-visitor/district', [WelcomeController::class, 'district'])->name('halaman.district');
Route::get('/pages-visitor/district/{id}/detail', [WelcomeController::class, 'districtDetail'])->name('halaman.district.detail');
Route::get('/pages-visitor/destination', [WelcomeController::class, 'destination'])->name('halaman.destination');
Route::get('/pages-visitor/search', [WelcomeController::class, 'search'])->name('halaman.search');
Route::get('/pages-visitor/about', [WelcomeController::class, 'about'])->name('halaman.about');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{category}/edit', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{category}/delete', [CategoryController::class, 'delete'])->name('category.delete');
});

// District
Route::prefix('district')->group(function () {
    Route::get('/', [DistrictController::class, 'index'])->name('district.index');
    Route::get('/create', [DistrictController::class, 'create'])->name('district.create');
    Route::post('/create', [DistrictController::class, 'store'])->name('district.store');
    Route::get('/{district}/edit', [DistrictController::class, 'edit'])->name('district.edit');
    Route::put('/{district}/edit', [DistrictController::class, 'update'])->name('district.update');
    Route::delete('/{district}/delete', [DistrictController::class, 'delete'])->name('district.delete');
});

// Destination
Route::prefix('destination')->group(function () {
    Route::get('', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('/create', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('/{destination}/edit', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('/{destination}/edit', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('/{destination}/delete', [DestinationController::class, 'delete'])->name('destination.delete');
});