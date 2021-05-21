<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\UsersTable;
use App\Http\Livewire\BrandsTable;
use App\Http\Livewire\CategoriesTable;
use App\Http\Livewire\ProductsTable;
use App\Http\Livewire\SuppliersTable;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', UsersTable::class)->name('users');
Route::middleware(['auth:sanctum', 'verified'])->resource('/users', UserController::class)->except('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/brands', BrandsTable::class)->name('brands');

Route::middleware(['auth:sanctum', 'verified'])->resource('/brands', BrandsController::class)->except('index');


Route::middleware(['auth:sanctum', 'verified'])->get('/suppliers', SuppliersTable::class)->name('suppliers');

Route::middleware(['auth:sanctum', 'verified'])->resource('/suppliers', SupplierController::class)->except('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/categories', CategoriesTable::class)->name('categories');
Route::middleware(['auth:sanctum', 'verified'])->resource('/categories', CategoryController::class)->except('index');


Route::middleware(['auth:sanctum', 'verified'])->get('/products', ProductsTable::class)->name('products');
Route::middleware(['auth:sanctum', 'verified'])->resource('/products', ProductController::class)->except('index');
