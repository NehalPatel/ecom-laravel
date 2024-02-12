<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('category.index');
Route::get('/categories/add', [App\Http\Controllers\CategoriesController::class, 'create'])->name('category.add');
Route::post('/categories/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category.store');

Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/categories/{category}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('category.save');

Route::delete('/categories/{category}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('category.delete');

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('product.index');
