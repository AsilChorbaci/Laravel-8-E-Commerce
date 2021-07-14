<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;


/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

# These Routes For Admin Panel
Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function (){

    Route::get('/', [HomeController::class,'index'])->name('admin-home');

    // Setting
    Route::get('setting', [SettingController::class,'index'])->name('admin-setting');
    Route::post('setting/update', [SettingController::class,'update'])->name('admin-update-setting');

    // Category Routes
    Route::prefix('category')->group(function (){
        Route::get('/', [CategoryController::class, 'index'])->name('admin-category');
        Route::get('create', [CategoryController::class,'create'])->name('admin-add-category');
        Route::post('store', [CategoryController::class,'store'])->name('admin-store-category');
        Route::get('edit/{id}', [CategoryController::class,'edit'])->name('admin-edit-category');
        Route::post('update/{id}', [CategoryController::class,'update'])->name('admin-update-category');
        Route::get('delete/{id}', [CategoryController::class,'destroy'])->name('admin-delete-category');
    });

    // Product Routes
    Route::prefix('product')->group(function (){
        Route::get('/', [ProductController::class, 'index'])->name('admin-product');
        Route::get('create', [ProductController::class, 'create'])->name('admin-create-product');
        Route::post('store', [ProductController::class, 'store'])->name('admin-store-product');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin-edit-product');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('admin-update-product');
        Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('admin-delete-product');
        Route::get('show', [ProductController::class, 'show'])->name('admin-show-product');
    });

    # Product Gallery
    Route::prefix('image')->group(function (){
        Route::get('create/{product_id}', [ImageController::class, 'create'])->name('admin-create-image');
        Route::post('store/{id}', [ImageController::class, 'store'])->name('admin-store-image');
        Route::get('delete/{id}/{product_id}', [ImageController::class, 'destroy'])->name('admin-delete-image');
        Route::get('show', [ImageController::class, 'show'])->name('admin-show-image');
    });

});

