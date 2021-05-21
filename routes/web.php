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

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', UsersTable::class)->name('users');
    Route::resource('/users', UserController::class)->except('index');

    Route::get('/brands', BrandsTable::class)->name('brands');

    Route::resource('/brands', BrandsController::class)->except('index');


    Route::get('/suppliers', SuppliersTable::class)->name('suppliers');

    Route::resource('/suppliers', SupplierController::class)->except('index');

    Route::get('/categories', CategoriesTable::class)->name('categories');
    Route::resource('/categories', CategoryController::class)->except('index');


    Route::get('/products', ProductsTable::class)->name('products');
    Route::resource('/products', ProductController::class)->except('index');
});

