<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RolesController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';



Route::get('/starter', function () {
    return view('layout.app');
});

// Route::get('/main',[AppController::class,'ShowData']);


// Route::get('/showProduct/{key}',[AppController::class,'Send']);

// // Route::get('/back', [CategoriesController::class,'back']);
// Route::get('categoris/create', [CategoryController::class,'create']);
// Route::post('categoris/create', [CategoryController::class,'store']);

// Route::get('categories', [CategoryController::class, 'index']);
// Route::get('categories/create', [CategoryController::class, 'create']);
// Route::post('categories/create', [CategoryController::class, 'store']);

// Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
// Route::put('categories/{id}', [CategoryController::class, 'update']);

// Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
// Route::view('product', [CategoryController::class, 'Product']);


Route::get('/store',  [PagesController::class, 'index']);




Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/products/trashed', [ProductController::class, 'gettrashed'])->name('products.trashed');
Route::delete('/products/trashed/{id}', [ProductController::class, 'deletetrashed'])->name('products.forcedelete');


Route::resource('products', ProductController::class);
// Route::get('products', [ProductController::class, 'index']);

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('roles', RolesController::class);
