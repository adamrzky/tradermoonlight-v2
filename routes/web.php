<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductAkunController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\IndexController;
// use App\Http\Controllers\Admin\ProductTypeAdminController;
use App\Http\Controllers\ProductTypeAdminController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/blog', function () {
    return view('blog');
});
  
// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });
// Route::get('/product', [ProductAkunController::class, 'index'])->name('product.akun');
Route::get('/product/details/{productId}', [ProductAkunController::class, 'getDetails'])->name('product.details');
Route::post('/proses-beli', [ProductAkunController::class, 'prosesBeli'])->name('proses.beli');


Auth::routes();
  
Route::get('/admin', [HomeController::class, 'index'])->name('admin');


// Product
Route::prefix('/admin/products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/broadcast/{id}', [ProductController::class, 'broadcast'])->name('broadcast');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::delete('/{product}/destroy', [ProductController::class, 'destroy'])->name('destroy');
    
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');
    
    // Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    // Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');

});

// ProductType
Route::prefix('/admin/productsType')->name('productsType.')->group(function () {
    Route::get('/', [ProductTypeAdminController::class, 'index'])->name('index');
    Route::get('/broadcast/{id}', [ProductTypeAdminController::class, 'broadcast'])->name('broadcast');
    Route::get('/show/{id}', [ProductTypeAdminController::class, 'show'])->name('show');
    Route::get('/create', [ProductTypeAdminController::class, 'create'])->name('create');
    Route::post('/store', [ProductTypeAdminController::class, 'store'])->name('store');
    Route::delete('/{productType}/destroy', [ProductTypeAdminController::class, 'destroy'])->name('destroy');
    
    Route::get('/{productType}/edit', [ProductTypeAdminController::class, 'edit'])->name('edit');
    Route::put('/{productType}/update', [ProductTypeAdminController::class, 'update'])->name('update');
    
    

});

// User Routes
Route::prefix('/admin/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::patch('/update/{product}', [UserController::class, 'update'])->name('update');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::delete('/{product}/destroy', [UserController::class, 'destroy'])->name('destroy');
});

// Role Routes
Route::prefix('/admin/roles')->name('roles.')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/show/{id}', [RoleController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('edit');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::patch('/update/{product}', [RoleController::class, 'update'])->name('update');
    Route::post('/store', [RoleController::class, 'store'])->name('store');
    Route::delete('/{product}/destroy', [RoleController::class, 'destroy'])->name('destroy');
});

// Permission Routes
Route::prefix('/admin/permissions')->name('permissions.')->group(function () {
    Route::get('/', [PermissionController::class, 'index'])->name('index');
    Route::get('/show/{id}', [PermissionController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PermissionController::class, 'edit'])->name('edit');
    Route::get('/create', [PermissionController::class, 'create'])->name('create');
    Route::put('/update/{permission}', [PermissionController::class, 'update'])->name('update');
    Route::post('/store', [PermissionController::class, 'store'])->name('store');
    Route::delete('/{permission}/destroy', [PermissionController::class, 'destroy'])->name('destroy');
});
  
