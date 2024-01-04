<?php

use Illuminate\Support\Facades\Route;

// Front
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BrandsController;
// End Front

// Master
use App\Http\Controllers\MasterController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\AdminProductsController;
// End Master

// User
// End user

Route::get('/', function () {
    return view('front.home');
});

Route::prefix('/')->group(function () {
    Route::get('/about-us', [AboutController::class, 'intro'])->name('intro');
    Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
    Route::get('/media', [MediaController::class, 'media'])->name('media');
    Route::get('/sitemap', [SitemapController::class, 'sitemap'])->name('sitemap');
    Route::get('/infrastructure', [InfrastructureController::class, 'infrastructure'])->name('infrastructure');
    Route::get('/faqs', [FaqController::class, 'faq'])->name('faq');
    Route::get('/our-brands', [BrandsController::class, 'brands'])->name('brands');

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductsController::class, 'products'])->name('products');
        Route::get('/product', [ProductsController::class, 'product'])->name('product');
    });
    
    Route::prefix('/blog')->group(function () {
        Route::get('/', [BlogsController::class, 'blog'])->name('blog');
        Route::get('/post', [BlogsController::class, 'post'])->name('post');
    });
});

// admin
Route::prefix('/master')->group(function () {
    Route::get('/', function () {
        return view('back.adminLogin');
    });
    Route::post('/master-login', [MasterController::class, 'masterLogin'])->name('masterLogin');
    Route::get('/dashboard', [MasterController::class, 'dashboard'])->name('masterDashboard');
    
    Route::prefix('/dbs')->group(function () {
        Route::prefix('/tables')->group(function () {
            Route::get('/create', [DatabaseController::class, 'createTable'])->name('createTable');
            Route::get('{table}', [DatabaseController::class, 'openTable'])->name('openTable');
            Route::get('update-row', [DatabaseController::class, 'updateTableRow'])->name('updateTableRow');
        });
    });

    Route::prefix('/products')->group(function () {
        Route::get('/', [AdminProductsController::class, 'products'])->name('adminProducts');
        Route::post('/add', [AdminProductsController::class, 'add'])->name('addProducts');
    });
});