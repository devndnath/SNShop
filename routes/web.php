<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\CouponController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Frontend\FrontendController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',[FrontendController::class, 'index'])->name('frontend.index');
Route::get('/shop',[ShopController::class, 'shop'])->name('frontend.shop');
Route::get('/coupon',[CouponController::class, 'coupon'])->name('frontend.coupon');
Route::get('/contact',[ContactController::class, 'index'])->name('frontend.contact');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
    Route::controller(CategoryController::class)->group(function(){

        Route::get('/category', 'index')->name('admin.category.index');
        Route::post('/category', 'store')->name('admin.category.store');
        Route::get('/category', 'show')->name('admin.category.show');
        Route::put('/category/{id}', 'update')->name('admin.category.update');
        Route::get('/category/{id}/delete', 'destroy')->name('admin.category.destroy');


    });
    Route::controller(SubcategoryController::class)->group(function(){

        Route::get('/sub-category', 'index')->name('admin.subcategory.index');
        Route::post('/sub-category', 'store')->name('admin.category.store');
        Route::get('/sub-category', 'show')->name('admin.category.show');

    });
    
});